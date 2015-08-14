<?php
function get_albums_list(){

	try
	{
		$dbh = db_connect();
		$sql = "SELECT * FROM album WHERE isVisible = true";
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

function get_album_details($id){

	try
	{
		$dbh = db_connect();
		$sql = "SELECT * FROM album WHERE albumID = :id";
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

function add_album($data){

	display($data);

	$label = $data['label'];
	$description = $data['description'];
	$releaseDate = $data['releaseDate_submit'];
	$artisteID = $data['artisteID'];


	try
	{
		$dbh = db_connect();
		$sql = "INSERT INTO album (label,description,releaseDate,artisteID) VALUES (:label,:description,:releaseDate,:artisteID)";


		$stmt = $dbh->prepare($sql);
		$stmt->execute(array(
			":label" => $label,
			":description" => $description,
			":releaseDate" => $releaseDate,
			":artisteID" => $artisteID
			));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

} // end add_artist()
?>