<?php
require_once('../Modèle/CarteMère.class.php');
require_once('../Modèle/CarteMèreDAO.class.php');

if (isset($_GET["firstId"]) == false ) {
	$page = 1;
} elseif (isset($_GET["firstId"])) {
	$page = $_GET["firstId"];
}
if ($page <= 0) {
	$page = 1;
}

if (isset($_GET["nbCarteMère"]) == false ) {
	$nbMusic = 10;
} elseif (isset($_GET["nbCarteMère"])) {
	$nbMusic = $_GET["nbCarteMère"];
}
$pageAvant = $page-1;
$pageApres = $page+1;

$config = parse_ini_file('../config/config.ini');

$jukebox = new CarteMèreDAO($config['database_path']);

for($i = 1+($nbMusic*($page - 1)); $i < ($nbMusic+1)+($nbMusic*($page - 1)); $i++){
	// Récupération de l'objet Music
	$m = $jukebox->get($i);
	// Ajout à la liste des images à afficher
	$list[$i] = '../Vues/Images/ImagesCarteMère/'.$m->cover;
}

//var_dump($list);
include('../view/main.view.php');
?>
