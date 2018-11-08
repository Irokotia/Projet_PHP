<?php
require_once('../Modèle/DisqueDur.class.php');
require_once('../Modèle/DisqueDurDAO.class.php');

if (isset($_GET["firstId"]) == false ) {
	$page = 1;
} elseif (isset($_GET["firstId"])) {
	$page = $_GET["firstId"];
}
if ($page <= 0) {
	$page = 1;
}

if (isset($_GET["nbDisqueDur"]) == false ) {
	$nbDisqueDur = 10;
} elseif (isset($_GET["nbDisqueDur"])) {
	$nbDisqueDur = $_GET["nbDisqueDur"];
}
$pageAvant = $page-1;
$pageApres = $page+1;

$config = parse_ini_file('../config/config.ini');

$DisqueDur = new CarteMèreDAO($config['database_path']);

for($i = 1+($nbDisqueDur*($page - 1)); $i < ($nbDisqueDur+1)+($nbDisqueDur*($page - 1)); $i++){
	// Récupération de l'objet Music
	$m = $DisqueDur->get($i);
	// Ajout à la liste des images à afficher
	$list[$i] = '../Vues/Images/ImagesDisqueDur/'.$m->img;
}

//var_dump($list);
include('../view/main.view.php');
?>
