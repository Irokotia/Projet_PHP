<?php
class SourisDAO
{
	private $db;

	function __construct($path) {
		$database = 'sqlite:'.$path.'/souris.db';
		try {
			$this->db = new PDO($database);
		} catch (PDOException $e) {
			die("ERREUR !!!".$e->getMessage());
		}
	}

	function get(int $id):Souris {
		$req="SELECT * FROM souris WHERE id='$id'";
		$sth=($this->db)->query($req);
		$result = $sth->fetchAll(PDO::FETCH_CLASS,'Music');
		return $result[0];
	}
}
?>
