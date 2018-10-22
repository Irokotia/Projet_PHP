<?php
require_once('CarteMère.class.php');
require_once('CarteMèreDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

//Création de l'instance DAO
$CarteMère = new CarteMèreDAO();

$cm = $CarteMère->get(1);
var_dump($cm);
 ?>
