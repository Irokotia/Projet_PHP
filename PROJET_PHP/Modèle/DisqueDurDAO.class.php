<?php
class DisqueDurDAO
{
	private $db;

	function __construct($path) {
		$database = 'sqlite:'.$path.'/disquedur.db';
		try {
			$this->db = new PDO($database);
		} catch (PDOException $e) {
			die("ERREUR !!!".$e->getMessage());
		}
	}

	function get(int $id):DisqueDur {
		$req="SELECT * FROM disquedur WHERE id='$id'";
		$sth=($this->db)->query($req);
		$result = $sth->fetchAll(PDO::FETCH_CLASS,'DisqueDur');
		return $result[0];
	}
}
?>
