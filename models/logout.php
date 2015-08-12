<?php
	!isset(session_start()) ? session_start() : null;
	session_destroy();
	header('location: index.php?page=login');
?>