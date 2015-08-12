<?php
session_start();
$_SESSION['key01'] = 'key01';
!isset($_SESSION['key02']) ? $_GET['page'] = 'login' : null;

require_once 'libs/date.inc.php';
require_once 'models/db_connect.inc.php';
include 'views/dom/header.php';

$debug = true;
$debug ? include 'libs/debug.inc.php': null;

if ($_SESSION['key01'] && !isset($_SESSION['key02'])) {
	include 'views/login.inc.php';
}else if(isset($_SESSION['key02'])){


	switch ($_GET['page']) {
		case 'artists':
			include 'views/artists.inc.php';
			break;
		case 'artist-detail':
			include 'views/artist_detail.inc.php';
			break;
		case 'add_artist':
			include 'views/add_artist.inc.php';
			break;
		default:
			include 'views/welcome.inc.php';
			break;
	}
}

include 'views/dom/footer.php';
?>
