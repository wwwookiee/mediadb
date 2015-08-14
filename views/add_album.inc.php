<?php

require_once 'models/albums.inc.php';
require_once 'models/artists.inc.php';

	isset($_POST['albumSubmit']) ? add_album($_POST) : null;

?>

<h1>add album</h1>

<form action="?page=add_album" method="post">

	<div class="row">
		<div class="input-field col l6 offset-l3">
			<input id="label" class="validate" name="label" type="text" placholder="Enter label" >
			<label for="label">Label</label>
		</div>
	</div>

	<div class="row">
		<div class="input-field col l6 offset-l3">
			<input id="releaseDate" class="validate datepicker" name="releaseDate" type="date">
			<!-- <input id="nickname" class="validate" name="nickname" type="text" placholder="Enter nickname" > -->
			<label for="releaseDate">Release Date</label>
		</div>
	</div>



	<div class="row">
		<div class="input-field col l6 offset-l3">
			<textarea id="description" name="description" class="materialize-textarea"></textarea>
			<label for="description">Description</label>
		</div>
	</div>

	<div class="row">

		<div class="input-field col l6 offset-l3">
			<select name="artisteID">
				<option value="" disabled selected>Choose an artist</option>
				<?php
					$artists = get_artists_list();
					foreach ($artists as $key => $value) {
						echo '<option value="'.$artists[$key]['artisteID'].'">'.$artists[$key]['label'].'</option>';
					}
				 ?>
			</select>
			<label>Nationality</label>
		</div>
	</div>


	<!-- <div class="row">
		<div class="file-field input-field col l6 offset-l3">
	      <input class="file-path validate" type="text"/>
	      <div class="btn">
	        <span>Picture</span>
	        <input type="file" />
	      </div>
	    </div>
	</div> -->

	<div class="row center">
		<button class="btn waves-effect waves-light" type="submit" name="albumSubmit" value="albumSubmit">Add artist
		</button>
	</div>
</div>
</form>

