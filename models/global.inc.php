<?php

	function db_connect(){

		return new PDO('mysql:host=localhost;dbname=mediadb;charset=utf8', 'root', '');

	}

	function get_nationalities_list(){

		try
		{
			$dbh = db_connect();
			$sql = "SELECT * FROM nationality";
			$stmt = $dbh->query($sql);
			$array = array();

			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					array_push($array, $row);
			}
			$stmt->closeCursor();
			return $array;
		}
		catch(PDOException $e)
		{
			return $e->getMessage();
		}

	}


?>