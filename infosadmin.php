<?php
session_start();
if (!isset($_SESSION["userrole"])) {
     header("Location: connexion.php");
}

if (isset($_SESSION["userrole"]) && ($_SESSION["userrole"]) !='admin') {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Profil</title>
</head>

<body>
<?php
    include "./includes/header.php";
    ?>
    <div class="profil">
        <div class="pgauche">
            <a href="infosadmin.php"><h2>Mes infos</h2></a>
            <a href="stagiairesadmin.php"><h2>Stagiaires</h2></a>
            <a href="formateursadmin.php"><h2>Formateurs</h2></a>
            <a href="formationsadmin.php"><h2>Formations</h2></a>

        </div>
        <div class="pdroite">
            <h3>MON PROFIL ADMINISTRATEUR</h3>
            <?php
            echo "<h4> Bonjour " . $_SESSION['civilite'] ." ". $_SESSION['nom'] . " " . $_SESSION['prenom'] . "<br>";
            echo "<h2> MES INFORMATIONS </h2>";
            echo "<b>Date de naissance: </b>" . $_SESSION['naissance']." "."<a href='modifid.php'><button>Modifier</button></a>"."<br>";
            echo "<b>Formation: </b>" . $_SESSION['formation']." "."<a href='modifid.php'><button>Modifier</button></a>"."<br>";
            echo "<b>Identifiant: </b>" . $_SESSION['mail']." "."<a href='modifid.php'><button>Modifier</button></a>"."<br>";
            echo "<b>Telephone: </b>0" . $_SESSION['telephone']." "."<a href='modiftel.php'><button>Modifier</button></a>"."<br>";
            echo "<b>Adresse: </b>" . $_SESSION['adresse']." "."<a href='modifad.php'><button>Modifier</button></a>"."<br>";
            echo "       " . $_SESSION['codepostal']. " ". $_SESSION['ville']. " ". strtoupper($_SESSION['pays'])."<br>";
            echo "<b>Date d'inscription: </b>" . $_SESSION['dateinscription']." "."<a href='modifid.php'><button>Modifier</button></a>"."<br>";
            ?>
        </div>
    </div>
    <?php
    include "./includes/footer.php";
    ?>
</body>

</html>