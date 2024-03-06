<?php
if (!isset($_SESSION["userrole"])) {
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
    <title>contenu bulletin</title>
</head>

<body>
    <div style='text-align: left'>
        <h2 style='color:gray; margin-bottom:-20px'>WEB!NAIRE</h2>
        <p>Centre de formation<br>
        <b>Tel:</b> 06 42 54 14 79 <br>
        <b>Mail:</b> contact@webinaire.com<br>
            5 avenue de france,<br>
            91300 PARIS<br>
        </p>
    </div>
    <?php
    ?>
    <div style='text-align: right'>
    <?php
    echo "<h2 style='margin-bottom:0px'>".$_SESSION['civilite']." ".$_SESSION['prenom']." ".$_SESSION['nom']."</h2>";
    echo "<b>Tel:</b> 0".$_SESSION['telephone']."<br>";
    echo "<b>Mail:</b>".$_SESSION['mail'].",<br>";
    echo $_SESSION['adresse']."<br>";
    echo $_SESSION['codepostal']. " ".$_SESSION['ville']."<br>";

    ?>
    </div><br><br>
    <center>
<h2 style="color:green"> BULLETIN DE NOTES</h2>
<?php
echo "<table border=1>";
echo "<tr>";
echo "<th style = 'width: 225px'>DATE EVAL</th><th style = 'width: 225px'>MATIERE</th><th style = 'width: 225px'>NOTE/20</th>";
echo "</tr>";
foreach ($connexion->query($sql) as $user) {
    echo "<tr>";
    foreach ($user as $cle => $valeur) {
        echo  "<td style = 'text-align: center'> $valeur </td>";
    }
    echo "</tr>";
}

foreach ($connexion->query($sql2) as $moyenne) {
}
echo "<tr><th colspan=2>Moyenne</th><td style = 'text-align: right; color: green'><b>" .number_format($moyenne['AVG(note)'], 2). "/20</td></tr></b>";
echo "</table><br><br>";
?><br><br><br>
<div style="text-align:right; margin-right:50px">
<p><b>WEB!NAIRE</b><br><br>
Fait à Paris le : <?php echo date("d/m/Y"); ?><br>
</p>  
</div>

</center>
</body>

</html>
