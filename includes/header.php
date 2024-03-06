<!-- <!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Menu</title>
</head> 

<body> -->
    <header>
        <ul id="menu">
        <a href="index.php"><p>WEB!NAIRE</p></a>
            <li><a href="index.php"> Accueil </a></li>
            <li><a href="formation.php"> Formation &#9207 </a>
                <ul class="smenu">
                    <li><a href="devweb.php"> Dev Web</a></li>
                    <li><a href="graphisme.php"> Graphisme</a></li>
                    <li><a href="marketing.php"> Marketing</a></li>
                </ul>
            </li>
            <li><a href="inscription.php"> Inscription </a></li>
            <li><a href="connexion.php"> Connexion </a></li>
            <li><a href="contact.php"> Contact </a></li>
            <li><a href='profil.php'> Mon compte </a>
            <?php
            if (isset($_SESSION["userrole"])) {
                echo "
            <ul class='smenu'>
                    <li><a href='deconnexion.php'> Deconnexion</a></li>
                </ul>";
            }
                ?>
            </li>
        </ul>
    </header>

<!-- </body>

</html> -->