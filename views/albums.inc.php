<?php
require_once 'models/albums.inc.php';

echo '<h2>Albums list</h2>';

$albumsList = get_albums_list();

// display($albumsList);

echo '<div class="row">';
for ($i=0; $i < count($albumsList) ; $i++) {

$id = $albumsList[$i]['albumID'];
$artistURL = "index.php?page=detail_album&id=$id";
?>
	<div class="col l4 m6 s12">
	<div class="card hoverable">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="http://lorempixel.com/600/600/abstract">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">

     <?php
     	// isset($albumsList[$i]['nickname']) ? $nick = $albumsList[$i]['nickname']." : " : $nick = "";
     	echo $albumsList[$i]['label'];
     ?>
      <i class="material-icons right">more_vert</i></span>
      <p><a href="<?php echo $artistURL; ?>">View more</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?php echo $albumsList[$i]['label']; ?><i class="material-icons right">close</i></span>
      <p><?php $text = substr($albumsList[$i]['description'], 0, 150); echo $text." ..."; ?></p>
      <p><a href="<?php echo $artistURL; ?>">View more</a></p>
    </div>
  </div>
	</div>
<?php }

echo '</div>';
?>

