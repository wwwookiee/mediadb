<?php
require_once 'models/artists.inc.php';

	isset($_POST['artistSubmit']) ? add_artist($_POST) : null;

?>

<h1>add artist</h1>

<form action="?page=add_artist" method="post">

	<div class="row">
		<div class="input-field col l6 offset-l3">
			<input id="label" class="validate" name="label" type="text" placholder="Enter label" >
			<label for="label">Label</label>
		</div>
	</div>

	<div class="row">
		<div class="input-field col l6 offset-l3">
			<input id="firstname" class="validate" name="firstname" type="text" placholder="Enter firstname" >
			<label for="firstname">Firstname</label>
		</div>
	</div>

	<div class="row">
		<div class="input-field col l6 offset-l3">
			<input id="lastname" class="validate" name="lastname" type="text" placholder="Enter lastname" >
			<label for="lastname">Lastname</label>
		</div>
	</div>

	<div class="row">
		<div class="input-field col l6 offset-l3">
			<input id="nickname" class="validate" name="nickname" type="text" placholder="Enter nickname" >
			<label for="nickname">Nickname</label>
		</div>
	</div>

	<div class="row">
		<div class="input-field col l6 offset-l3">
			<input id="birthdate" class="validate datepicker" name="birthdate" type="date">
			<!-- <input id="nickname" class="validate" name="nickname" type="text" placholder="Enter nickname" > -->
			<label for="birthdate">Birthdate</label>
		</div>
	</div>

	<div class="row">
		<div class="input-field col l6 offset-l3">
			<input id="birthlocation" class="validate" name="birthlocation" type="text" placholder="Enter birthlocation" >
			<label for="birthlocation">Bithplace</label>
		</div>
	</div>

	<div class="row">
		<div class="input-field col l6 offset-l3">
			<textarea id="biography" name="biography" class="materialize-textarea"></textarea>
			<label for="biography">Biography</label>
		</div>
	</div>


	<div class="row">
		<div class="input-field col l6 offset-l3">
			<input id="website" class="validate" name="website" type="text" placholder="Enter website" >
			<label for="website">Website</label>
		</div>
	</div>

	<div class="row">
		<div class="input-field col l6 offset-l3">
			<select name="nationalityID">
				<option value="" disabled selected>Choose a nationality</option>
				<?php
					$nationalities = get_nationalities_list();
					foreach ($nationalities as $key => $value) {
						echo '<option value="'.$nationalities[$key]['nationalityID'].'">'.$nationalities[$key]['label'].'</option>';
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
		<button class="btn waves-effect waves-light" type="submit" name="artistSubmit" value="artistSubmit">Add artist
		</button>
	</div>
</div>
</form>

