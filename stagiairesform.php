<?php
session_start();
if (!isset($_SESSION["userrole"])) {
     header("Location: connexion.php");
}

if (isset($_SESSION["userrole"]) && ($_SESSION["userrole"]) !='formateur') {
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
        <a href="infosform.php"><h2>Mes infos</h2></a>
        <a href="stagiairesform.php"><h2>Mes Stagiaires</h2></a>
        <a href="formationsform.php"><h2>Mes Formations</h2></a>
        </div>
        <div class="pdroite">
            <h2>MON PROFIL FORMATEUR</h2>
            <?php
            include "./includes/connexionbdd.php";
                $sql = "SELECT * FROM users, notes WHERE users.userrole = 'stagiaire' AND users.mail = notes.idstagiaire";
                echo "<table border=1>";
                echo "<tr>";
                echo "<th>ID</th><th>CIVILITE</th><th>PRENOM</th><th>NOM</th><th>MAIL</th>
                <th>FORMATION</th><th>ROLE</th><th>DATE D'INSCRIPTION</th><th>DATE EVALUATION</th><th>Matiere</th><th>NOTE</th>";
                echo "</tr>";
                foreach ($connexion->query($sql) as $user) {
                    echo "<tr>";
                        echo  "<td>" .$user['id']. "</td>";
                        echo  "<td>" .$user['civilite']. "</td>";
                        echo  "<td>". $user['prenom'] ."</td>";
                        echo  "<td>". $user['nom'] ."</td>";
                        echo  "<td>". $user['mail'] ."</td>";
                        echo  "<td>". $user['formation'] ."</td>";
                        echo  "<td>". $user['userrole'] ."</td>";
                        echo  "<td>". $user['dateinscription'] ."</td>";
                        echo  "<td>". $user['dateeval'] ."</td>";
                        echo  "<td>". $user['evaluation'] ."</td>";
                        echo  "<td>". $user['note'] ."</td>";
                    echo "</tr>";
                }
                echo "</table><br><br>";
            ?>
                    <h3>AJOUTER UNE NOUVELLE EVALUATION</h3><br>
            <form action="" method="POST">
            <select name="idstag">
                <?php
                    $sql = "SELECT mail FROM users WHERE userrole = 'stagiaire'";
                    foreach ($connexion->query($sql) as $user) {
                            echo  "<option>". $user['mail'] ."</option>";
                        echo "</tr>";
                    }
                ?>
            </select>
            <input type="date" name="dateeval" placeholder="date de fin"><br>
            <input type="number" name="note" placeholder="/20"><br>
            <input type="text" name="eval" placeholder="HTML/CSS"><br>
            <input type="submit" name="envoyer" value="Ajouter" class="btn">
        </form><br>

        <?php
        if(!empty($_POST['envoyer'])){
            $idstag = $_POST['idstag'];
            $dateeval = $_POST['dateeval'];
            $note = $_POST['note'];
            $eval = $_POST['eval'];
            $sql1 = "INSERT INTO notes (idstagiaire, dateeval, evaluation, note) 
            VALUES (:idstagiaire, :dateeval, :evaluation, :note)";
            $insertion = $connexion->prepare($sql1);
            $insertion->bindParam(":idstagiaire", $idstag, PDO::PARAM_STR);
            $insertion->bindParam(":dateeval", $dateeval);
            $insertion->bindParam(":evaluation", $eval, PDO::PARAM_STR);
            $insertion->bindParam(":note", $note, PDO::PARAM_INT);
            $insertion->execute();
            echo "<br> Insertion réussie !<br>";
            header("Location: stagiairesform.php");
        }

        ?>
        </div>
    </div>
    <?php
    include "./includes/footer.php";
    ?>
</body>

</html>