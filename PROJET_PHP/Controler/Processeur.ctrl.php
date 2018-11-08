<?php
require_once('../Modèle/Processeur.class.php');
require_once('../Modèle/ProcesseurDAO.class.php');

if (isset($_GET["firstId"]) == false ) {
	$page = 1;
} elseif (isset($_GET["firstId"])) {
	$page = $_GET["firstId"];
}
if ($page <= 0) {
	$page = 1;
}

if (isset($_GET["nbProcesseur"]) == false ) {
	$nbProcesseur = 10;
} elseif (isset($_GET["nbProcesseur"])) {
	$nbProcesseur = $_GET["nbProcesseur"];
}
$pageAvant = $page-1;
$pageApres = $page+1;

$config = parse_ini_file('../config/config.ini');

$Processeur = new ProcesseurDAO($config['database_path']);

for($i = 1+($nbProcesseur*($page - 1)); $i < ($nbProcesseur+1)+($nbProcesseur*($page - 1)); $i++){
	// Récupération de l'objet Processeur
	$p = $Processeur->get($i);
	// Ajout à la liste des images à afficher
	$list[$i] = '../Vues/Images/ImagesProcesseur/'.$p->img;
}

//var_dump($list);
include('../Vues/Processeur.vues.php');
?>
