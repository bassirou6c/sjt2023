<?php
 session_start();
if (!isset($_SESSION["userrole"])) {
     header("Location: connexion.php");
}

if (isset($_SESSION["userrole"]) && ($_SESSION["userrole"])=='admin') {
    header("Location: profiladmin.php");
}
if (isset($_SESSION["userrole"]) && ($_SESSION["userrole"])=='formateur') {
    header("Location: profilformateur.php");
}
echo "<center>";
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
<h1>PROFIL</h1>
<?php
    echo "<h4> Bonjour " . $_SESSION['civilite'] ." ". $_SESSION['nom'] . " " . $_SESSION['prenom'] . "<br>";
    echo "Bienvenue sur votre compte </h4><br>";
    echo "<h2> MES INFORMATIONS </h2>";
    echo "<b>Date de naissance: </b>" . $_SESSION['naissance']." "."<a href='modifid.php'><button>Modifier</button></a>"."<br>";
    echo "<b>Formation: </b>" . $_SESSION['formation']." "."<a href='modifid.php'><button>Modifier</button></a>"."<br>";
    echo "<b>Identifiant: </b>" . $_SESSION['mail']." "."<a href='modifid.php'><button>Modifier</button></a>"."<br>";
    echo "<b>Telephone: </b>0" . $_SESSION['telephone']." "."<a href='modiftel.php'><button>Modifier</button></a>"."<br>";
    echo "<b>Adresse: </b>" . $_SESSION['adresse']." "."<a href='modifad.php'><button>Modifier</button></a>"."<br>";
    echo "       " . $_SESSION['codepostal']. " ". $_SESSION['ville']. " ". strtoupper($_SESSION['pays'])."<br>";
    echo "<b>Date d'inscription: </b>" . $_SESSION['dateinscription']." "."<a href='modifid.php'><button>Modifier</button></a>"."<br>";
    ?><br>
<h2>MON SUIVI FORMATION</h2>
<?php
    include "./includes/connexionbdd.php";
    $id = $_SESSION['mail'];
    $sql = "SELECT dateeval, evaluation, note FROM notes WHERE idstagiaire = '$id'";
    echo "<table border=1>";
    echo "<tr>";
    echo "<th style = 'width: 200px'>DATE EVAL</th><th style = 'width: 200px'>MATIERE</th><th style = 'width: 200px'>NOTE/20</th>";
    echo "</tr>";
    foreach ($connexion->query($sql) as $user) {
        echo "<tr>";
        foreach ($user as $cle => $valeur) {
            echo  "<td style = 'text-align: center'> $valeur </td>";
        }
        echo "</tr>";
    }
    $sql2 = "SELECT AVG(note) FROM notes WHERE idstagiaire = '$id'";
    foreach ($connexion->query($sql2) as $moyenne) {
    }
    echo "<tr><th colspan=2>Moyenne</th><td style = 'text-align: right; color: green'><b>" .number_format($moyenne['AVG(note)'], 2). "/20</td></tr></b>";
    echo "</table><br><br>";
?><br>
<h2>MES DOCUMENTS</h2>
<a href="attestation.php"><button>Attestation de formation</button></a>
<a href="bulletin.php"><button>bulletin de note</button></a>
<br><br>
<?php
echo "</center>";
    include "./includes/footer.php";
    ?>
</body>

</html>