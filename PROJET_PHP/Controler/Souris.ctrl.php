<?php
require_once('../Modèle/Souris.class.php');
require_once('../Modèle/Souris.class.php');

if (isset($_GET["firstId"]) == false ) {
	$page = 1;
} elseif (isset($_GET["firstId"])) {
	$page = $_GET["firstId"];
}
if ($page <= 0) {
	$page = 1;
}

if (isset($_GET["nbSouris"]) == false ) {
	$nbSouris = 10;
} elseif (isset($_GET["nbSouris"])) {
	$nbSouris = $_GET["nbSouris"];
}
$pageAvant = $page-1;
$pageApres = $page+1;

$config = parse_ini_file('../config/config.ini');

$Souris = new SourisDAO($config['database_path']);

for($i = 1+($nbSouris*($page - 1)); $i < ($nbSouris+1)+($nbSouris*($page - 1)); $i++){
	// Récupération de l'objet Souris
	$s = $Souris->get($i);
	// Ajout à la liste des images à afficher
	$list[$i] = '../Vues/Images/ImagesSouris/'.$s->img;
}

//var_dump($list);
include('../view/main.view.php');
?>
