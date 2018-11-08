<?php
include('../Modèle/DisqueDur.class.php');
include('../Modèle/DisqueDurDAO.class.php');
// Récupération des valeurs de la query string
$id = $_GET["id"];

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instace DAO
$DisqueDur = new DisqueDurDAO($config['database_path']);

// Récupération de l'objet musique correspondant à l'id
$m = $DisqueDur->get($id);

include('../view/play.view.php');
?>
