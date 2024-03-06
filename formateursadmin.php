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
            <h3>LISTE DES FORMATEURS</h3>
            <?php
            include "./includes/connexionbdd.php";
                $sql = "SELECT * FROM users WHERE userrole = 'formateur'";
                echo "<table border=1>";
                echo "<tr>";
                echo "<th>ID</th><th>CIVILITE</th><th>PRENOM</th><th>NOM</th><th>MAIL</th><th>MOT DE PASSE</th>
                <th>DATE DE NAISSANCE</th><th>TELEPHONE</th><th>ADRESSE</th><th>CODE POSTAL</th><th>VILLE</th>
                <th>PAYS</th><th>FORMATION</th><th>ROLE</th><th>DATE D'INSCRIPTION</th>";
                echo "</tr>";
                foreach ($connexion->query($sql) as $user) {
                    echo "<tr>";
                    foreach ($user as $cle => $valeur) {
                        echo  "<td> $valeur </td>";
                    }
                    echo "</tr>";
                }
                echo "</table><br><br>";
            ?>
            <button>Ajouter</button> <button>Modifier</button> <button>Supprimer</button>
        </div>
    </div>
    <?php
    include "./includes/footer.php";
    ?>
</body>

</html>