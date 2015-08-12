<?php

require_once 'models/artists.inc.php';


$artist = get_artist_details($_GET['id']);

?>
<div class="row center">
	<h2 class="center"><?php echo $artist['label'] ?></h2>
	<img class="activator circle" src="http://lorempixel.com/300/300/people">
</div>
<div class="row">
	<p><b>Real name : </b><?php echo $artist['firstname']." ".$artist['lastname']; ?></p>
	<p><b>Nickname : </b><?php if($artist['nickname'] !== null){ echo $artist['nickname']; }else{echo 'none';} ?></p>
	<p><b>Born : </b><?php  echo date_transform($artist['birthdate'])." in ".$artist['bithlocation']; ?></p>
	<p><b>Nationality : </b><?php $nat = get_artist_nationality($artist['nationalityID']); echo $nat['label']; ?></p>
	<p><b>Biography : </b><?php echo $artist['biography'] ?></p>
	<p><a href="<?php echo $artist['website'] ?>"><?php echo $artist['website'] ?></a></p>

</div>
