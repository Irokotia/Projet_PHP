<?php
require_once('Souris.class.php');
require_once('SourisDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

//Création de l'instance DAO
$Souris = new SourisDAO($config['database_path']);

$dd = $Souris->get(1);
var_dump($dd);
 ?>
