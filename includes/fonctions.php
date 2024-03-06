<?php
    //fonction pour rechercher un adresse mail
    function rechercheMAil($email){
        $compteur = 0;
        $servername = 'localhost';
        $dbname = 'centrebdd';
        $username = 'root';
        $password = '';
        try{
            $connexion = new PDO("mysql:host=$servername; dbname=$dbname", "$username", "$password");
            //Définir les modes d'erreur d'exception
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        catch (PDOException $erreur) {
            $fichier = fopen("error.log", "a+");
            setlocale(LC_TIME, "fr_FR");
            date_default_timezone_set('Europe/Paris');
            fwrite($fichier, date("d/m/Y h:i:s"). ": " .$erreur->getMessage(). "\n");
            fclose($fichier);
        }
        $sql = "SELECT * FROM users";
        $requete= $connexion->query($sql);
        $user = $requete->fetchAll();
        for ($i = 0; $i < count($user); $i++) {
            foreach ($user[$i] as $cle => $valeur) {
                if($valeur == $email){
                    $compteur++;
                }
            }
        }
        return $compteur;
    }

    //fonction secu sql
    function secusql($phrase)
    {
        $regex1 = "select";
        $regex2 = "insert";
        $regex3 = "update";
        $regex4 = "drop";
        if (preg_match("/$regex1|$regex2|$regex3|$regex4/i", $phrase)) {
            $phrase = str_ireplace($regex1, "", $phrase);
            $phrase = str_ireplace($regex2, "", $phrase);
            $phrase = str_ireplace($regex3, "", $phrase);
            $phrase = str_ireplace($regex4, "", $phrase);
            return $phrase;
        }
    }

    //fonction secu html js
    function secuhtmljs($phrase2)
    {
        $phrase2 = htmlentities($phrase2);
        $phrase2 = trim($phrase2); 
        $phrase2 = stripslashes($phrase2); 
        $regex1 = "&lt;";
        $regex2 = "<";
        $regex3 = ">";
        $regex4 = "&gt;";
        if (preg_match("/$regex1|$regex2|$regex3|$regex4/i", $phrase2)) {
            $phrase2 = str_ireplace($regex1, "", $phrase2);
            $phrase2 = str_ireplace($regex2, "", $phrase2);
            $phrase2 = str_ireplace($regex3, "", $phrase2);
            $phrase2 = str_ireplace($regex4, "", $phrase2);
        }
        return $phrase2;
    }
    //fonction secu mail
    function secumail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return 1;
        } else {
        return 0;
        }
    }
    //fonction pour verifier la longueur du mdp
    function secumdp($mdp){
        if ((strlen($mdp)>=8)&&(strlen($mdp)<=20)) {
        return 1;
        } else {
        return 0;
        }
    }
    //fonction pour verifier du text
    function verifytext($text){
        if (preg_match("/^[A-Za-z '-]+$/", $text)) {
        return 1;
        } else {
        return 0;
        }
    }
    //fonctiion pour verifier un numero
    function verifynum($num){
        if (preg_match("/^[0-9]+$/", $num)) {
        return 1;
        } else {
        return 0;
        }
    }
    //fonction pour verifier du text
    function verifyadress($text){
        if (preg_match("/^[A-Za-z0-9 '-,.]+$/", $text)) {
        return 1;
        } else {
        return 0;
        }
    }
    //fonction pour verifier un numero de telephone
    function verifytel($tel){
        if (preg_match("/\d{10}/", $tel)) {
        return 1;
        } else {
        return 0;
        }
    }
    //fonction pour verifier le cp
    function verifycp($cp){
        if (preg_match("/\d{5}/", $cp)) {
        return 1;
        } else {
        return 0;
        }
    }
    //fonction pour calculer age
    function age($date) { 
        $age = date('Y') - $date; 
       if (date('md') < date('md', strtotime($date))) { 
           return $age - 1; 
       } 
       return $age; 
   }

   //fonction pour verifier une date
   function isValid($date, $format='Y-m-d') {
    $dt=DateTime::createFromFormat($format,$date);
    return $dt && $dt->format($format)===$date;
}
?>