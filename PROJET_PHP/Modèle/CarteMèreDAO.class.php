<?php
class CarteMèreDAO
{
	private $db;

	function __construct($path) {
		$database = 'sqlite:'.$path.'/cartemere.db';
		try {
			$this->db = new PDO($database);
		} catch (PDOException $e) {
			die("ERREUR !!!".$e->getMessage());
		} 
	}

	function get(int $id):CarteMère {
		$req="SELECT * FROM cartemère WHERE id='$id'";
		$sth=($this->db)->query($req);
		$result = $sth->fetchAll(PDO::FETCH_CLASS,'CarteMère');
		return $result[0];
	}
}
?>
