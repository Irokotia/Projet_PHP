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
	$nbCarteMère = 10;
} elseif (isset($_GET["nbCarteMère"])) {
	$nbCarteMère = $_GET["nbCarteMère"];
}
$pageAvant = $page-1;
$pageApres = $page+1;

$config = parse_ini_file('../config/config.ini');

$CarteMère = new CarteMèreDAO($config['database_path']);
for($i = 1+($nbCarteMère*($page - 1)); $i < ($nbCarteMère+1)+($nbCarteMère*($page - 1)); $i++){
	// Récupération de l'objet CarteMère
	$c = $CarteMère->get($i);
	// Ajout à la liste des images à afficher
	$list[$i] = $c;
}

//var_dump($list);
include('../Vues/CarteMère.vues.php');
?>
