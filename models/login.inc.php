<?php
	if(isset($_POST['loginSubmit'])){
		if($_POST['login'] == 'root' && $_POST['password'] == 'root'){
			$_SESSION['key02'] = 'key02';
			header('location: ?page=welcome');
		}
	}
?>
