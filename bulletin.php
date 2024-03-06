<?php
session_start();
if (!isset($_SESSION["userrole"])) {
    header("Location: connexion.php");
}

include "./includes/connexionbdd.php";
$id = $_SESSION['mail'];
$sql = "SELECT dateeval, evaluation, note FROM notes WHERE idstagiaire = '$id' ORDER BY dateeval";
$sql2 = "SELECT AVG(note) FROM notes WHERE idstagiaire = '$id'";

ob_start();
require_once "contenubulletin.php";
$html = ob_get_contents();
ob_end_clean();
// include autoloader
require_once './includes/dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml("$html");//ou file_get_contents("fichier.html")

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait'); // 'portrait' ou 'lanscape'

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("bulletin", ['Attachment'=>0]); //$dompdf->stream("testpdf1", ['Attachment'=>0]) empeche le téléchargement du fichier;

?>