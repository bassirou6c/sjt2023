<?php
session_start();
if (isset($_SESSION["userrole"]) && ($_SESSION["userrole"])=='admin') {
    header("Location: profiladmin.php");
}elseif(isset($_SESSION["userrole"]) && ($_SESSION["userrole"])=='stagiaire'){
    header("Location: profil.php");
}elseif(isset($_SESSION["userrole"]) && ($_SESSION["userrole"])=='formateur'){
    header("Location: profilformateur.php");
}
?>
<?php
    if(!empty($_POST['envoyer'])){
    include_once "./includes/fonctions.php";
    $email = $_POST['mail'];
    $exist = rechercheMAil($email);
    $validemail = secumail($email);
    $validemdp = secumdp($_POST['mdp1']);
    $valideprenom = verifytext($_POST['prenom']);
    $validenom = verifytext($_POST['nom']);
    $valideville = verifytext($_POST['ville']);
    $validepays = verifytext($_POST['pays']);
    $validetel = verifytel($_POST['telephone']);
    $valideadresse = verifyadress($_POST['adresse']);
    $validecp = verifycp($_POST['cp']);
    }
    if(!empty($_POST['envoyer']) && ($exist==0) && ($_POST["mdp1"] == $_POST["mdp2"]) && ($validemail == 1)
    && ($validemdp == 1) && ($valideprenom == 1) && ($validenom == 1) && ($valideadresse == 1) 
    && ($validecp == 1) && ($validetel == 1)){
        include_once "./includes/connexionbdd.php";
        $_POST['prenom'] = secuhtmljs($_POST['prenom']);
        $_POST['nom'] = secuhtmljs($_POST['nom']);
        $_POST['mail'] = secuhtmljs($_POST['mail']);
        $_POST['date'] = secuhtmljs($_POST['date']);
        $_POST['telephone'] = secuhtmljs($_POST['telephone']);
        $_POST['adresse'] = secuhtmljs($_POST['adresse']);
        $_POST['cp'] = secuhtmljs($_POST['cp']);
        $_POST['ville'] = secuhtmljs($_POST['ville']);
        $_POST['pays'] = secuhtmljs($_POST['pays']);

        $civilite = $_POST['civilite'];
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp1'];
        $naissance = $_POST['date'];
        $mdphash = password_hash($mdp, PASSWORD_DEFAULT);
        $telephone = $_POST['telephone'];
        $adresse = $_POST['adresse'];
        $codepostal = $_POST['cp'];
        $ville = $_POST['ville'];
        $pays = $_POST['pays'];
        $formation = $_POST['formation'];
        $userrole = 'stagiaire';

        $sql1 = "INSERT INTO users (civilite, prenom, nom, mail, mdp, naissance, telephone, adresse, codepostal, ville, pays, formation, userrole ) 
        VALUES (:civilite, :prenom, :nom, :mail, :mdp, :naissance, :telephone, :adresse, :codepostal, :ville, :pays, :formation, :userrole)";
        $insertion = $connexion->prepare($sql1);
        $insertion->bindParam(":civilite", $civilite, PDO::PARAM_STR);
        $insertion->bindParam(":prenom", $prenom, PDO::PARAM_STR);
        $insertion->bindParam(":nom", $nom, PDO::PARAM_STR);
        $insertion->bindParam(":mail", $mail, PDO::PARAM_STR);
        $insertion->bindParam(":mdp", $mdphash, PDO::PARAM_STR);
        $insertion->bindParam(":naissance", $naissance);
        $insertion->bindParam(":telephone", $telephone, PDO::PARAM_INT);
        $insertion->bindParam(":adresse", $adresse, PDO::PARAM_STR);
        $insertion->bindParam(":codepostal", $codepostal, PDO::PARAM_INT);
        $insertion->bindParam(":ville", $ville, PDO::PARAM_STR);
        $insertion->bindParam(":pays", $pays, PDO::PARAM_STR);
        $insertion->bindParam(":formation", $formation, PDO::PARAM_STR);
        $insertion->bindParam(":userrole", $userrole, PDO::PARAM_STR);
        $insertion->execute();
        header("Location: connexion.php");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Inscription</title>
</head>

<body>
<?php
    include "./includes/header.php";
    ?>
    <div class="banniere">
        <img src="./assets/Images/inscription.jpg" alt="" class="imgban">
        <div class="textban">
            <h1>INSCRIPTION</h1>
            <a href="contact.html"><button class="btn">Contactez nous</button></a>
        </div>
    </div><br>
    <form action="" method="POST">
        <select type="checkbox" name="civilite" id="">
            <option>Mr</option>
            <option>Mme</option>
        </select><br>
        <input type="text" name="prenom" placeholder="Prenom"><br>
        <?php
        if ((!empty($_POST["envoyer"])) && ($valideprenom != 1)) {
            echo "<b style = 'color: red'>* le prenom ne doit contenir que des lettres ou des tirets. </b><br>";
        }
        ?>
        <input type="text" name="nom" placeholder="Nom"><br>
        <?php
        if ((!empty($_POST["envoyer"])) && ($validenom != 1)) {
            echo "<b style = 'color: red'>* le nom ne doit contenir que des lettres ou des tirets. </b><br>";
        }
        ?>
        <input type="email" name="mail" placeholder="toto@gmail.com"><br>
        <?php
        if ((!empty($_POST["envoyer"])) && ($exist != 0)) {
            echo "<b style = 'color: red'>* l'adresse mail existe déjà. </b><br>";
        }
        if ((!empty($_POST["envoyer"])) && ($validemail != 1)) {
            echo "<b style = 'color: red'>* l'adresse mail saisie est incorrect. </b><br>";
        }
        ?>
        <input type="password" name="mdp1" placeholder="Mot de passe"><br>
        <input type="password" name="mdp2" placeholder="Confirmez mot de passe"><br>
        <?php
        if ((!empty($_POST["mdp1"])) && (!empty($_POST["mdp2"])) && ($_POST["mdp1"] != $_POST["mdp2"])) {
            echo "<b style = 'color: red'>* Veuillez saisir le meme mot de passe</b><br>";
        }
        if ((!empty($_POST["envoyer"])) && ($validemdp != 1)) {
            echo "<b style = 'color: red'>* le mot de passe doit faire entre 8 et 20 caractères. </b><br>";
        }
        ?>
        <input type="date" name="date" placeholder="Date de naissance"><br>
        <input type="number" name="telephone" placeholder="Telephone"><br>
        <?php
        if ((!empty($_POST["envoyer"])) && ($validetel != 1)) {
            echo "<b style = 'color: red'>* le numero telephone doit contenir 10 chiffres. </b><br>";
        }
        ?>
        <input type="text" name="adresse" placeholder="5 avenue de Paris"><br>
        <?php
        if ((!empty($_POST["envoyer"])) && ($valideadresse != 1)) {
            echo "<b style = 'color: red'>* l'adresse saisie est incorrect. </b><br>";
        }
        ?>
        <input type="number" name="cp" placeholder="75001"><br>
        <?php
        if ((!empty($_POST["envoyer"])) && ($validecp != 1)) {
            echo "<b style = 'color: red'>* le code postal doit contenir 5 chiffres. </b><br>";
        }
        ?>
        <input type="text" name="ville" placeholder="Paris"><br>
        <?php
        if ((!empty($_POST["envoyer"])) && ($valideville != 1)) {
            echo "<b style = 'color: red'>* la ville ne doit contenir que des lettres et des tirets. </b><br>";
        }
        ?>
        <input type="text" name="pays" placeholder="France"><br>
        <?php
        if ((!empty($_POST["envoyer"])) && ($validepays != 1)) {
            echo "<b style = 'color: red'>* le champ pays ne doit contenir que des lettres et des tirets. </b><br>";
        }
        ?>
        <select type="checkbox" name="formation" id="">
            <option>Dev Web</option>
            <option>Graphisme</option>
            <option>Marketing</option>
        </select><br>
        <input type="submit" name="envoyer" value="Soumettre" class="btn">
    </form><br>
    <p>Vous etes déjà inscrit, connectez vous par <a href="connexion.php">ici</a>.</p>
    <br>
    <?php
    include "./includes/footer.php";
    ?>
</body>

</html>
