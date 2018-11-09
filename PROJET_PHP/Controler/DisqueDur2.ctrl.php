<?php
include('../Modèle/DisqueDur.class.php');
include('../Modèle/DisqueDurDAO.class.php');
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
$DisqueDur = new DisqueDurDAO($config['database_path']);

// Récupération de l'objet DisqueDur correspondant à l'id
$d = $DisqueDur->get($id);

include('../Vues/DisqueDur2.vues.php');
?>
