<?php
//variables de connexion;
$servername = 'localhost';
$username = 'root';
$password = '';
//On teste la connexion
try {
    $connexion = new PDO("mysql:host=$servername;", "$username", "$password");
    //Définir les modes d'erreur d'exception
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //On affecte notre requete sql à une variable
    $sql = "CREATE DATABASE centrebdd CHARACTER SET utf8 COLLATE utf8_bin";
    //On execute la requete sql
    $connexion->exec($sql);
}
//On capture les exceptions (les erreurs) de PDO avec PDOException
catch (PDOException $erreur) {
    $fichier = fopen("error.log", "a+");
    setlocale(LC_TIME, "fr_FR");
    date_default_timezone_set('Europe/Paris');
    fwrite($fichier, date("d/m/Y h:i:s"). ": " .$erreur->getMessage(). "\n");
    fclose($fichier);
}

//variables de connexion;
$servername = 'localhost';
$dbname = 'centrebdd';
$username = 'root';
$password = '';
//On teste la connexion
try {
    $connexion = new PDO("mysql:host=$servername; dbname=$dbname", "$username", "$password");
    //Définir les modes d'erreur d'exception
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    //On affecte notre requete sql à une variable
    $sql = "CREATE TABLE users (
        id INT(5) AUTO_INCREMENT PRIMARY KEY,
        civilite VARCHAR(20) NOT NULL,
        prenom VARCHAR(80) NOT NULL,
        nom VARCHAR(50) NOT NULL,
        mail VARCHAR(200),
        mdp VARCHAR(200),
        naissance DATE,
        telephone INT(10),
        adresse VARCHAR(200),
        codepostal INT(5),
        ville VARCHAR(200),
        pays VARCHAR(200),
        formation VARCHAR(200),
        userrole VARCHAR(70),
        dateinscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) CHARACTER SET utf8 COLLATE utf8_bin";
    //On execute la requete sql
    $connexion->exec($sql);

    //creation table contacts
$sql1 = "CREATE TABLE contacts (
    id INT(5) AUTO_INCREMENT PRIMARY KEY,
    civilite VARCHAR(20) NOT NULL,
    prenom VARCHAR(80) NOT NULL,
    nom VARCHAR(50) NOT NULL,
    mail VARCHAR(200),
    telephone INT(10),
    adresse VARCHAR(200),
    codepostal INT(5),
    ville VARCHAR(200),
    pays VARCHAR(200),
    messages VARCHAR(400),
    dateenvoi TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) CHARACTER SET utf8 COLLATE utf8_bin";
//On execute la requete sql
$connexion->exec($sql1);


//creation table formations
$sql2 = "CREATE TABLE formations (
    id INT(5) AUTO_INCREMENT PRIMARY KEY,
    reference VARCHAR(200) NOT NULL,
    datedebut DATE,
    datefin DATE,
    idformateur INT(5)
) CHARACTER SET utf8 COLLATE utf8_bin";
//On execute la requete sql
$connexion->exec($sql2);

$sql3 = "CREATE TABLE notes (
    id INT(5) AUTO_INCREMENT PRIMARY KEY,
    idstagiaire VARCHAR(200) NOT NULL,
    dateeval DATE,
    evaluation VARCHAR(200) NOT NULL,
    note INT(2)
) CHARACTER SET utf8 COLLATE utf8_bin";
//On execute la requete sql
$connexion->exec($sql3);


}
//On capture les exceptions (les erreurs) de PDO avec PDOException
catch (PDOException $erreur) {
    $fichier = fopen("error.log", "a+");
    setlocale(LC_TIME, "fr_FR");
    date_default_timezone_set('Europe/Paris');
    fwrite($fichier, date("d/m/Y h:i:s"). ": " .$erreur->getMessage(). "\n");
    fclose($fichier);
}


?>