<?php
    if(!empty($_POST['envoyer'])){
    include_once "./includes/fonctions.php";
    $email = $_POST['mail'];
    $validemail = secumail($email);
    $valideprenom = verifytext($_POST['prenom']);
    $validenom = verifytext($_POST['nom']);
    $valideville = verifytext($_POST['ville']);
    $validepays = verifytext($_POST['pays']);
    $validetel = verifytel($_POST['telephone']);
    $valideadresse = verifyadress($_POST['adresse']);
    $validecp = verifycp($_POST['cp']);
    }
    if(!empty($_POST['envoyer']) && ($validemail == 1) && ($valideprenom == 1) 
    && ($validenom == 1) && ($valideadresse == 1) && ($validecp == 1) && ($validetel == 1)){
        include_once "./includes/connexionbdd.php";
        $_POST['prenom'] = secuhtmljs($_POST['prenom']);
        $_POST['nom'] = secuhtmljs($_POST['nom']);
        $_POST['mail'] = secuhtmljs($_POST['mail']);
        $_POST['telephone'] = secuhtmljs($_POST['telephone']);
        $_POST['adresse'] = secuhtmljs($_POST['adresse']);
        $_POST['cp'] = secuhtmljs($_POST['cp']);
        $_POST['ville'] = secuhtmljs($_POST['ville']);
        $_POST['pays'] = secuhtmljs($_POST['pays']);
        $_POST['messages'] = secuhtmljs($_POST['messages']);

        $civilite = $_POST['civilite'];
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $mail = $_POST['mail'];
        $telephone = $_POST['telephone'];
        $adresse = $_POST['adresse'];
        $codepostal = $_POST['cp'];
        $ville = $_POST['ville'];
        $pays = $_POST['pays'];
        $messages = $_POST['messages'];

        $sql = "INSERT INTO contacts (civilite, prenom, nom, mail, telephone, adresse, codepostal, ville, pays, messages ) 
        VALUES (:civilite, :prenom, :nom, :mail, :telephone, :adresse, :codepostal, :ville, :pays, :messages)";
        $insertion = $connexion->prepare($sql);
        $insertion->bindParam(":civilite", $civilite, PDO::PARAM_STR);
        $insertion->bindParam(":prenom", $prenom, PDO::PARAM_STR);
        $insertion->bindParam(":nom", $nom, PDO::PARAM_STR);
        $insertion->bindParam(":mail", $mail, PDO::PARAM_STR);
        $insertion->bindParam(":telephone", $telephone, PDO::PARAM_INT);
        $insertion->bindParam(":adresse", $adresse, PDO::PARAM_STR);
        $insertion->bindParam(":codepostal", $codepostal, PDO::PARAM_INT);
        $insertion->bindParam(":ville", $ville, PDO::PARAM_STR);
        $insertion->bindParam(":pays", $pays, PDO::PARAM_STR);
        $insertion->bindParam(":messages", $messages, PDO::PARAM_STR);
        $insertion->execute();
        $e = "<p>Votre message est correctement envoyé.</p><br>";
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Contact</title>
</head>

<body>
<?php
    include "./includes/header.php";
    ?>
    <div class="banniere">
        <img src="./assets/Images/contact.jpg" alt="" class="imgban">
        <div class="textban">
            <h1>CONTACT</h1>
        </div>
    </div><BR></BR>
    <form action="" method="POST">
        <select type="checkbox" name="civilite" id="">
            <option>Mr</option>
            <option>Mme</option>
        </select><br>
        <input type="text" name="prenom" placeholder="Prenom"><br>
        <input type="text" name="nom" placeholder="Nom"><br>
        <input type="email" name="mail" placeholder="toto@gmail.com"><br>
        <input type="number" name="telephone" placeholder="Telephone"><br>
        <input type="text" name="adresse" placeholder="5 avenue de Paris"><br>
        <input type="number" name="cp" placeholder="75001"><br>
        <input type="text" name="ville" placeholder="Paris"><br>
        <input type="text" name="pays" placeholder="France"><br>
        <textarea name="messages" id="" cols="30" rows="10"></textarea>
        <input type="submit" name="envoyer" value="Envoyer" class="btn">
    </form><br><br>
    <?php
    if (!empty($_POST['envoyer'])) {
        echo "$e";
    }
    ?>
    <?php
    include "./includes/footer.php";
    ?>
</body>

</html>