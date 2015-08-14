<?php

require_once 'models/albums.inc.php';


$album = get_album_details($_GET['id']);

?>
<div class="row center">
	<h2 class="center"><?php echo $album['label'] ?>
		</h2>
</div>
<div class="row center">
<img class="activator circle" src="http://lorempixel.com/300/300/abstract"><br>
	<a class="tooltipped" href="index.php?page=modify_artist&id=<?php echo $_GET['id'] ?>" data-position="bottom" data-delay="50" data-tooltip="Modify artist" style="cursor:pointer">
			<i class="small material-icons">mode_edit</i>
		</a>
		<a class="tooltipped modal-trigger" href="#modal1" data-position="bottom" data-delay="50" data-tooltip="Delete artist" style="cursor:pointer">
			<i class="small material-icons">delete</i>
		</a>
</div>

		  <!-- Modal Structure -->
		  <div id="modal1" class="modal">
		    <div class="modal-content">
		      <h4>Deletion</h4>
		      <p>This artist will be deleted.</p>
		    </div>
		    <div class="modal-footer">
		      <a href="index.php?page=delete_artist&id=<?php echo $_GET['id'] ?>" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
		    </div>
		  </div>


<div class="row">
	<h5>Artist</h5><p><?php echo $album['artisteID']; ?></p>
	<h5>Release Date</h5><p><?php echo date_transform($album['releaseDate']);?></p>
	<h5>Description</h5><p><?php  echo $album['description']; ?></p>
</div>


