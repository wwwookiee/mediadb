<?php

	function get_artists_list(){

		try
		{
			$dbh = db_connect();
			$sql = "SELECT * FROM artist";
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

	function get_artist_details($id){

			try
			{
				$dbh = db_connect();
				$sql = "SELECT * FROM artist WHERE artisteID = :id";
				$stmt = $dbh->prepare($sql);
				$stmt->bindValue("id", $id);
				$stmt->execute();

				$array = array();

				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					$stmt->closeCursor();
					return $row;
				}

			}
			catch(PDOException $e)
			{
				return $e->getMessage();
			}

		}

		function get_artist_nationality($id){
			try
			{
				$dbh = db_connect();
				$sql = "SELECT label FROM nationality WHERE nationalityID = :id";
				$stmt = $dbh->prepare($sql);
				$stmt->bindValue("id", $id);
				$stmt->execute();

				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					$stmt->closeCursor();
					return $row;
				}

			}
			catch(PDOException $e)
			{
				return $e->getMessage();
			}
		}

		function add_artist($data){
			
		}

 ?>
