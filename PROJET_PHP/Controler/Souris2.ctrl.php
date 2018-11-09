<?php
include('../Modèle/Souris.class.php');
include('../Modèle/SourisDAO.class.php');
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
$Souris = new SourisDAO($config['database_path']);

// Récupération de l'objet souris correspondant à l'id
$s = $Souris->get($id);

include('../Vues/Souris2.vues.php');
?>
