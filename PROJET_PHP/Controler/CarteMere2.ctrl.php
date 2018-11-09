<?php
include('../Modèle/CarteMère.class.php');
include('../Modèle/CarteMèreDAO.class.php');
// Récupération des valeurs de la query string
$id = $_GET["id"];

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instace DAO
$CarteMère = new CarteMèreDAO($config['database_path']);

// Récupération de l'objet CarteMère correspondant à l'id
$c = $CarteMère->get($id);

include('../Vues/CarteMere2.vues.php');
?>
