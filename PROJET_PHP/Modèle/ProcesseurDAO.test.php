<?php
require_once('Processeur.class.php');
require_once('ProcesseurDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

//Création de l'instance DAO
$Processeur = new ProcesseurDAO($config['database_path']);

$p = $Processeur->get(1);
var_dump($p);
 ?>
