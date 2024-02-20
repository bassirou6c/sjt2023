<?php
$pages = array("accueil", "connexion", "contact", "inscription", "connexionbdd", "fonctions", "header", "footer");
$dossiers = array("","includes", "assets");
//On définit une constante qui contient le chemin de la page index
define('ROOT', str_replace('index.php', '' , $_SERVER['SCRIPT_FILENAME']));
//die(ROOT);
//On observe le contenu de l'url
//var_dump($_GET);
//On sépare les parametres
if(!empty($_GET['p'])){
    $params = explode('/', $_GET['p']);
}else{
    $params[0] = "";
    require_once "./accueil.php";
    die();
}
//var_dump($params);
//On vérifie si un parametre existe
if($params[0]!= ""){
    // $dossier = ucfirst($params[0]);
    $dossier = strtolower($params[0]);
    $page = !empty($params[1]) ? strtolower($params[1]) : "";
    if(in_array($dossier, $dossiers)){
        require_once "./403.php";
        //die("ERROR 403 Page demande autorisation <br>");
        die();
   }
    if((!in_array($dossier, $dossiers)) && (!in_array($dossier, $pages))){
        require_once "./404.php";
        //die("ERROR 404 Page introuvable <br>");
        die();
   }
    if((!in_array($dossier, $dossiers)) && (in_array($dossier, $pages))){
         require_once(ROOT.$page.'.php');
         die();
    }
    if((in_array($dossier, $dossiers)) && (in_array($dossier, $pages))){
        require_once "./403.php";
        die();
   }
    if(!in_array($page, $pages)){
        require_once "./404.php";
        die();
   }
}
