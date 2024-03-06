<?php
session_start();
if (!isset($_SESSION["userrole"])) {
    header("Location: connexion.php");
}
//On démarre ob_start pour avoir une sauvegarde en mémoire
ob_start();
require_once "contenuattestation.php"; //ob_start va récuperer toutes les données du fichier require
$html = ob_get_contents(); //on affecte le contenu dans ficher dans notre variable $html
ob_end_clean(); // on libere la mémoire

//require du fichier autoload
require_once "./includes/dompdf/autoload.inc.php";
//On precise l'utilisation de dompdf
use Dompdf\Dompdf;
use Dompdf\Options;

//chager la typographie
$option = new Options();
$option->set('defaultFont', 'courier');
$option->set('chroot', realpath('')); //Pour afficher les images
//on instancie dompdf
$dompdf = new Dompdf($option);
//on met du html dans le fichier
$dompdf->loadHtml($html);
//on set le type de papier
$dompdf->setPaper('A4', 'portrait');
//on crée le document en mémoire
$dompdf->render();
//on affiche le document
$nomfichier = "Attestation_" . $_SESSION["prenom"] . "_" . $_SESSION["nom"];
$dompdf->stream("$nomfichier", ['Attachment'=>0]);//Attachment=>0 pour empecher le télécharger automatique du fichier
?>
