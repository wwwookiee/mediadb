<?php
require_once 'models/artists.inc.php';

echo '<h2>Artist list</h2>';

$artistList = get_artists_list();

// display($artistList);

echo '<div class="row">';
for ($i=0; $i < count($artistList) ; $i++) {

$id = $artistList[$i]['artisteID'];
$artistURL = "index.php?page=artist-detail&id=$id";
?>
	<div class="col l4 m6 s12">
	<div class="card hoverable">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="http://lorempixel.com/600/600/people">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">

     <?php
     	// isset($artistList[$i]['nickname']) ? $nick = $artistList[$i]['nickname']." : " : $nick = "";
     	echo $artistList[$i]['label'];
     ?>
      <i class="material-icons right">more_vert</i></span>
      <p><a href="<?php echo $artistURL; ?>">View more</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?php echo $artistList[$i]['label']; ?><i class="material-icons right">close</i></span>
      <p><?php $text = substr($artistList[$i]['biography'], 0, 150); echo $text." ..."; ?></p>
      <p><a href="<?php echo $artistURL; ?>">View more</a></p>
    </div>
  </div>
	</div>
<?php }

echo '</div>';
?>

