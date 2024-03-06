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
            <h3>LISTE DES FORMATIONS</h3>
            <?php
            include "./includes/connexionbdd.php";
                $sql = "SELECT * FROM formations";
                echo "<table border=1>";
                echo "<tr>";
                echo "<th>ID</th><th>REFERENCE</th><th>DATE DEBUT</th><th>DATE FIN</th><th>ID FORMATEUR</th>";
                echo "</tr>";
                foreach ($connexion->query($sql) as $formation) {
                    echo "<tr>";
                    foreach ($formation as $cle => $valeur) {
                        echo  "<td> $valeur </td>";
                    }
                    echo "</tr>";
                }
                echo "</table><br><br>";
            ?>
            <button>Modifier</button> <button>Supprimer</button>
            <br><br>
        <h3>AJOUTER UNE NOUVELLE FORMATION</h3><br>
        <form action="" method="POST">
            <input type="text" name="reference" placeholder="Reference"><br>
            <input type="date" name="debut" placeholder="date de debut"><br>
            <input type="date" name="fin" placeholder="date de fin"><br>
            <input type="number" name="idform" placeholder="id formateur"><br>
            <input type="submit" name="envoyer" value="Ajouter" class="btn">
        </form><br>

        <?php
        if(!empty($_POST['envoyer'])){
            $reference = $_POST['reference'];
            $debut = $_POST['debut'];
            $fin = $_POST['fin'];
            $idform = $_POST['idform'];
            $sql1 = "INSERT INTO formations (reference, datedebut, datefin, idformateur) 
            VALUES (:reference, :datedebut, :datefin, :idformateur)";
            $insertion = $connexion->prepare($sql1);
            $insertion->bindParam(":reference", $reference, PDO::PARAM_STR);
            $insertion->bindParam(":datedebut", $debut);
            $insertion->bindParam(":datefin", $fin);
            $insertion->bindParam(":idformateur", $idform, PDO::PARAM_INT);
            $insertion->execute();
            echo "<br> Insertion réussie !<br>";
            header("Location: formationsadmin.php");
        }

        ?>
        </div>
    </div>
    <?php
    include "./includes/footer.php";
    ?>
</body>

</html>