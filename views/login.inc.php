<form action="?" method="post">
	<div class="row">
		<div class="input-field col l6 offset-l3">
			<input id="login" class="validate" name="login" type="text" placholder="Enter your login" >
			<label for="login">Login</label>
		</div>
	</div>
	<div class="row">
		<div class="input-field col l6 offset-l3">
			<input id="password" class="validate" name="password" type="text" placholder="Enter your password" >
			<label for="password">Password</label>
		</div>
		<button class="btn waves-effect waves-light" type="submit" name="loginSubmit" value="connexion">	sign up
  		</button>
	</div>
</form>

<?php require_once 'models/login.inc.php'; ?>