<?php
include('../model/CarteMère.class.php');
include('../model/CarteMèreDAO.class.php');
// Récupération des valeurs de la query string
$id = $_GET["id"];

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instace DAO
$jukebox = new CarteMèreDAO($config['database_path']);

// Récupération de l'objet musique correspondant à l'id
$m = $jukebox->get($id);

include('../view/play.view.php');
?>
