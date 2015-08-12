<?php

function db_connect(){

	try
	{
		return new PDO('mysql:host=localhost;dbname=mediadb;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

}

?>