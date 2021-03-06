<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Media DB</title>
	<link rel="stylesheet" href="assets/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/main.css">
  <script src="assets/js/jquery-2.1.4.min.js"></script>
</head>
<body>

 <div class="navbar-fixed">

    <nav>

      <div class="nav-wrapper">

        <a href="?page=welcome" class="brand-logo">MediaDB</a>

        <?php if(isset($_SESSION['key02'])){?>

          <ul class="right hide-on-med-and-down">

            <li><a href="?page=artists">Artists</a></li>
            <li><a href="?page=albums">Albums</a></li>

            <li>
              <form action="?" method="get">
                <div class="input-field">
                  <input id="search" type="search" name="search" required>
                  <label for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
                </div>
              </form>
            </li>

          </ul>

        <?php } ?>

      </div>

    </nav>

  </div>

<div class="container">