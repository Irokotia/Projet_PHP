<?php
class ProcesseurDAO
{
	private $db;

	function __construct($path) {
		$database = 'sqlite:'.$path.'/processeur.db';
		try {
			$this->db = new PDO($database);
		} catch (PDOException $e) {
			die("ERREUR !!!".$e->getMessage());
		}
	}

	function get(int $id):Processeur {
		$req="SELECT * FROM processeur WHERE id='$id'";
		$sth=($this->db)->query($req);
		$result = $sth->fetchAll(PDO::FETCH_CLASS,'Processeur');
		return $result[0];
	}
}
?>
