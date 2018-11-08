<?php
include('../Modèle/Processeur.class.php');
include('../Modèle/ProcesseurDAO.class.php');
// Récupération des valeurs de la query string
$id = $_GET["id"];

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instace DAO
$Processeur = new ProcesseurDAO($config['database_path']);

// Récupération de l'objet processeur correspondant à l'id
$p = $Processeur->get($id);

include('../Vues/Processeur.vues.php');
?>
