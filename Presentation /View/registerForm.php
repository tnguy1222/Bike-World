<?php

require_once 'header.php';

require_once 'style.css';
?>
<div class="center">
<h1> Register Your Account</h1>

<form action="processNewUser.php" method ="POST">
<div class="container">
	<div class="form-group">
		<label for="firstname">First Name</label>
		<input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname">
	</div>
	
	<div class="form-group">
		<label for="lastname">Last Name</label>
		<input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname">
	</div>
	
	<div class="form-group">
		<label for="username">User Name</label>
		<input type="text" class="form-control" id="username" placeholder="User Name" name="username">
	</div>
	
	<div class="form-group">
		<label for="password">Password</label>
		<input type="text" class="form-control" id="password" placeholder="Password" name="password">
	</div>
	
	<div class="form-group">
		<label for="role">Role</label>
		<select class="form-control" id="role" name="role"> 
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
		</select>
	</div>
	<button type="submit" value="submit" class="btn btn-default">SUBMIT</button>
</div>	
</form>
</div>
