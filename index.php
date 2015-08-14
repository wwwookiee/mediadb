<?php
session_start();
$_SESSION['key01'] = 'key01';
!isset($_SESSION['key02']) || !isset($_GET['page']) ? $_GET['page'] = 'login' : null;

require_once 'libs/date.inc.php';
require_once 'models/global.inc.php';
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
		case 'modify_artist':
			include 'views/modify_artist.inc.php';
			break;
		case 'delete_artist':
			include 'views/delete_artist.inc.php';
			break;
		case 'albums':
			include 'views/albums.inc.php';
			break;
		case 'add_album':
			include 'views/add_album.inc.php';
			break;
		case 'detail_album':
			include 'views/detail_album.inc.php';
			break;
		case 'modify_album':
			include 'views/add_album.inc.php';
			break;
		case 'delete_album':
			include 'views/add_album.inc.php';
			break;


		default:
			include 'views/welcome.inc.php';
			break;
	}
}

include 'views/dom/footer.php';
?>
