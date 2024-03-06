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
            <h1>MON PROFIL ADMINISTRATEUR</h1>
        </div>
    </div>
    <?php
    include "./includes/footer.php";
    ?>
</body>

</html>