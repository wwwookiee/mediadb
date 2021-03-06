<?php

require_once 'models/artists.inc.php';


$artist = get_artist_details($_GET['id']);

?>
<div class="row center">
	<h2 class="center"><?php echo $artist['label'] ?>
		</h2>
</div>
<div class="row center">
<img class="activator circle" src="http://lorempixel.com/300/300/people"><br>
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
	<h5>Real name</h5><p><?php echo $artist['firstname']." ".$artist['lastname']; ?></p>
	<h5>Nickname</h5><p><?php if($artist['nickname'] !== ""){ echo $artist['nickname']; }else{echo 'none';} ?></p>
	<h5>Born</h5><p><?php  echo date_transform($artist['birthdate'])." in ".$artist['birthlocation']; ?></p>
	<h5>Nationality</h5><p><?php $nat = get_artist_nationality($artist['nationalityID']); echo $nat['label']; ?></p>
	<h5>Biography</h5><p><?php echo $artist['biography'] ?></p>
	<p><a href="<?php echo $artist['website'] ?>"><?php echo $artist['website'] ?></a></p>

</div>


