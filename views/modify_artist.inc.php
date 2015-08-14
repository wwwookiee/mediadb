<?php

require_once 'models/artists.inc.php';

$id = $_GET['id'];


isset($_POST['artistSubmit']) ? modify_artist($_POST) : null;

$artist = get_artist_details($id);
?>

<h1 class="center"><?php echo $artist['label'] ?></h1>

<form action="?page=modify_artist&id=<?php echo $id; ?>" method="post">
	<input type="hidden" name="artisteID" value="<?php echo $artist['artisteID']; ?>">
	<div class="row">
		<div class="input-field col l6 offset-l3">
			<input id="label" class="validate" name="label" type="text" placholder="Enter label" value="<?php echo $artist['label']; ?>" >
			<label for="label">Label</label>
		</div>
	</div>

	<div class="row">
		<div class="input-field col l6 offset-l3">
			<input id="firstname" class="validate" name="firstname" type="text" placholder="Enter firstname" value="<?php echo $artist['firstname']; ?>" >
			<label for="firstname">Firstname</label>
		</div>
	</div>

	<div class="row">
		<div class="input-field col l6 offset-l3">
			<input id="lastname" class="validate" name="lastname" type="text" placholder="Enter lastname" value="<?php echo $artist['lastname']; ?>" >
			<label for="lastname">Lastname</label>
		</div>
	</div>

	<div class="row">
		<div class="input-field col l6 offset-l3">
			<input id="nickname" class="validate" name="nickname" type="text" placholder="Enter nickname" value="<?php echo $artist['nickname']; ?>" >
			<label for="nickname">Nickname</label>
		</div>
	</div>

	<div class="row">
		<div class="input-field col l6 offset-l3">
			<input id="birthdate" class="validate datepicker" name="birthdate" type="date" value="<?php echo $artist['birthdate']; ?>">
			<!-- <input id="nickname" class="validate" name="nickname" type="text" placholder="Enter nickname" > -->
			<label for="birthdate">Birthdate</label>
		</div>
	</div>

	<div class="row">
		<div class="input-field col l6 offset-l3">
			<input id="birthlocation" class="validate" name="birthlocation" type="text" placholder="Enter birthlocation" value="<?php echo $artist['birthlocation']; ?>" >
			<label for="birthlocation">Bithplace</label>
		</div>
	</div>

	<div class="row">
		<div class="input-field col l6 offset-l3">
			<textarea id="biography" name="biography" class="materialize-textarea"><?php echo $artist['biography']; ?></textarea>
			<label for="biography">Biography</label>
		</div>
	</div>


	<div class="row">
		<div class="input-field col l6 offset-l3">
			<input id="website" class="validate" name="website" type="text" placholder="Enter website" value="<?php echo $artist['website']; ?>">
			<label for="website">Website</label>
		</div>
	</div>

	<div class="row">
		<div class="input-field col l6 offset-l3">
			<select name="nationalityID">
				<?php
					$nationalities = get_nationalities_list();
					foreach ($nationalities as $key => $value) {
						if($artist['nationalityID'] == $nationalities[$key]['nationalityID']){
							echo '<option selected value="'.$nationalities[$key]['nationalityID'].'">'.$nationalities[$key]['label'].'</option>';
						}else{

							echo '<option value="'.$nationalities[$key]['nationalityID'].'">'.$nationalities[$key]['label'].'</option>';
						}
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
		<button class="btn waves-effect waves-light" type="submit" name="artistSubmit" value="artistSubmit">Save
		</button>
	</div>
</div>
</form>

