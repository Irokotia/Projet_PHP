<?php
include('../Modèle/Processeur.class.php');
include('../Modèle/ProcesseurDAO.class.php');
// Récupération des valeurs de la query string
$id = $_GET["id"];
if ($id < 1) {
  $id = 1;
} elseif ($id >= 20) {
  $id = 20;
}

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instace DAO
$Processeur = new ProcesseurDAO($config['database_path']);

// Récupération de l'objet processeur correspondant à l'id
$p = $Processeur->get($id);

include('../Vues/Processeur2.vues.php');
?>
