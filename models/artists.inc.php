<?php

function get_artists_list(){

	try
	{
		$dbh = db_connect();
		$sql = "SELECT * FROM artist WHERE isVisible = true";
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

	$label = $data['label'];
	$firstname = $data['firstname'];
	$lastname = $data['lastname'];
	$nickname = $data['nickname'];
	$birthdate = $data['birthdate_submit'];
	$birthlocation = $data['birthlocation'];
	$biography = $data['biography'];
	$website = $data['website'];
	$nationalityID = $data['nationalityID'];

	try
	{
		$dbh = db_connect();
		$sql = "INSERT INTO artist (label,firstname,lastname,nickname,birthdate,birthlocation,biography,website,nationalityID) VALUES (:label,:firstname,:lastname,:nickname,:birthdate,:birthlocation,:biography,:website,:nationalityID)";


		$stmt = $dbh->prepare($sql);
		$stmt->execute(array(
			":label" => $label,
			":firstname" => $firstname,
			":lastname" => $lastname,
			":nickname" => $nickname,
			":birthdate" => $birthdate,
			":birthlocation" => $birthlocation,
			":biography" => $biography,
			":website" => $website,
			":nationalityID" => $nationalityID
			));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

} // end add_artist()


function modify_artist($data){

	$label 			= 	$data['label'];
	$firstname 		= 	$data['firstname'];
	$lastname 		= 	$data['lastname'];
	$nickname 		= 	$data['nickname'];
	$birthdate 		= 	$data['birthdate_submit'];
	$birthlocation 	= 	$data['birthlocation'];
	$biography 		= 	$data['biography'];
	$website 	 	= 	$data['website'];
	$nationalityID 	= 	$data['nationalityID'];
	$id 			= 	$data['artisteID'];

	try
	{
		$dbh = db_connect();
		$sql = "UPDATE artist SET label = :label,firstname = :firstname,lastname = :lastname,nickname = :nickname,birthdate = :birthdate,birthlocation = :birthlocation,biography = :biography,website = :website,nationalityID = :nationalityID WHERE artisteID = :id";


		$stmt = $dbh->prepare($sql);
		$stmt->execute(array(
			":label" => $label,
			":firstname" => $firstname,
			":lastname" => $lastname,
			":nickname" => $nickname,
			":birthdate" => $birthdate,
			":birthlocation" => $birthlocation,
			":biography" => $biography,
			":website" => $website,
			":nationalityID" => $nationalityID,
			":id" => $id
			));
		echo '<div class="row"><div class="col l6 offset-l3 center "><div class="card-panel  light-green lighten-1  ">
          <span class="white-text">Updated successfully</span>&nbsp<a href="index.php?page=artist-detail&id='.$id.'" class="white-text" style="text-decoration:underline">go to artist page</a></div></div></div>';
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
}

function delete_artist($id){

	try
	{
		$dbh = db_connect();
		$sql = "UPDATE artist SET isVisible = false WHERE artisteID = :id";


		$stmt = $dbh->prepare($sql);
		$stmt->execute(array(
			":id" => $id
			));
		echo '<div class="row"><div class="col l6 offset-l3 center "><div class="card-panel  light-green lighten-1  ">
          <span class="white-text">Updated successfully</span>&nbsp<a href="index.php?page=artists" class="white-text" style="text-decoration:underline">view all artists</a></div></div></div>';
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
}
?>
