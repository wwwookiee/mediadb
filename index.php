<?php
session_start();
$_SESSION['loged'] = false;

include 'views/dom/header.php';

$debug = true;
$debug ? include 'libs/debug.inc.php': null;




if ($_SESSION['loged'] == false) {
	include 'views/login.inc.php';
}else{


}

include 'views/dom/footer.php';
?>
