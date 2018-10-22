<?php
require_once('DisqueDur.class.php');
require_once('DisqueDurDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

//Création de l'instance DAO
$DisqueDur = new DisqueDurDAO($config['database_path']);

$dd = $DisqueDur->get(1);
var_dump($dd);
 ?>
