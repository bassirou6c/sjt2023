<?php
 session_start();
if (isset($_SESSION["userrole"]) && ($_SESSION["userrole"])=='admin') {
    header("Location: profiladmin.php");
}elseif(isset($_SESSION["userrole"]) && ($_SESSION["userrole"])=='stagiaire'){
    header("Location: profil.php");
}elseif(isset($_SESSION["userrole"]) && ($_SESSION["userrole"])=='formateur'){
    header("Location: profilformateur.php");
}
// $_SESSION['token'] = md5(uniqid(mt_rand(), true));
$_SESSION['token'] = uniqid(mt_rand(), true);
// $_SESSION['token'] = mt_rand();
// $_SESSION['token'] = uniqid();
// echo $_SESSION['token'];
?>
<?php
    if(!empty($_POST['envoyer'])){
        include_once "./includes/fonctions.php";
        $email = $_POST['mail'];
        $exist = rechercheMAil($email);
        $validemail = secumail($email);
        /*verification du token*/
        $token = $_POST['token'];
        if($token != $_SESSION['token']){
            header('Location: ./403.php');
        }
    }
    if(!empty($_POST['envoyer']) && ($exist != 0) && ($validemail == 1)){
       include_once "./includes/connexionbdd.php";

        $mail = $_POST['mail'];
        $mdp = $_POST['mdp1'];

        $sql = "SELECT * FROM users where mail = '$mail'";
        $requete = $connexion->query($sql);
        $user = $requete->fetch();
        if (password_verify($mdp, $user['mdp'])){
            //echo "connexion réussie <br>";
            $_SESSION['id'] = $user['id'];
            $_SESSION['civilite'] = $user['civilite'];
            $_SESSION['prenom'] = $user['prenom'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['mail'] = $user['mail'];
            $_SESSION['mdp'] = $user['mdp'];
            $_SESSION['naissance'] = $user['naissance'];
            $_SESSION['telephone'] = $user['telephone'];
            $_SESSION['adresse'] = $user['adresse'];
            $_SESSION['codepostal'] = $user['codepostal'];
            $_SESSION['ville'] = $user['ville'];
            $_SESSION['pays'] = $user['pays'];
            $_SESSION['formation'] = $user['formation'];
            $_SESSION['userrole'] = $user['userrole'];
            $_SESSION['dateinscription'] = $user['dateinscription'];
            if($user['userrole'] == 'admin'){
                header("Location: profiladmin.php");
            }elseif($user['userrole'] == 'formateur'){
            header("Location: profilformateur.php");
            }else{
                header("Location: profil.php");
            }
        }else{
            $e = "identifiant ou mot de passe incorrect";
        }
    } elseif (!empty($_POST['envoyer']) && ($exist == 0)) {
        $e = "identifiant ou mot de passe incorrect";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Connexion</title>
</head>

<body>
<?php
    include "./includes/header.php";
    ?>
    <h1>Connexion</h1>
    <form action="" method="POST">
        <?php
            if(!empty($_POST['envoyer'])){
                echo "<b style = 'color: red'>* $e </b><br>";
            }
        ?>
        <input type="email" name="mail" placeholder="toto@gmail.com"><br>
        <input type="password" name="mdp1" placeholder="Mot de passe"><br>
        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
        <input type="submit" name="envoyer" value="Se connecter" class="btn">
    </form><br>
    <p>Vous n'etes pas encore inscrit, inscrivez vous par <a href="inscription.php">ici</a>.</p>
    <br>
    <?php
    include "./includes/footer.php";
    ?>
</body>

</html>

