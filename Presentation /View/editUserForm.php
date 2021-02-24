<?php
require_once 'AutoLoader.php';
require_once 'header.php';
require_once 'style.css';
require_once 'UserBusinessService.php';

$id = $_GET['id'];

$bs = new UserBusinessService();

$person = $bs->findByID($id);

//echo "<pre>";
//print_r($person);
//echo "</pre>";

?>
<div class="center">
<h1> Update Your Account</h1>

<form action="processUpdateUser.php" method ="POST">
<div class="container">

	<div class="form-group">
		<label for="id">ID</label>
		<input type="text" class="form-control" id="ID" value="<?php echo $person->getId()?> "name="id">
	</div>
	<div class="form-group">
		<label for="firstname">First Name</label>
		<input type="text" class="form-control" id="firstname" value="<?php echo $person->getFirstname()?> "name="firstname">
	</div>
	
	<div class="form-group">
		<label for="lastname">Last Name</label>
		<input type="text" class="form-control" id="lastname" value="<?php echo $person->getLastname()?> " name="lastname">
	</div>
	
	<div class="form-group">
		<label for="username">User Name</label>
		<input type="text" class="form-control" id="username" value="<?php echo $person->getUsername()?> " name="username">
	</div>
	
	<div class="form-group">
		<label for="password">Password</label>
		<input type="text" class="form-control" id="password" value="<?php echo $person->getPassword()?> " name="password">
	</div>
	
	<div class="form-group">
		<label for="role">Role</label>
		<select class="form-control" id="role" name="role"> 
			<option <?php  if($person->getRole() == 1){ echo "selected='selected'"; }?>>1</option>
			<option <?php  if($person->getRole() == 2){ echo "selected='selected'"; }?>>2</option>
			<option <?php  if($person->getRole() == 3){ echo "selected='selected'"; }?>>3</option>
			<option <?php  if($person->getRole() == 4){ echo "selected='selected'"; }?>>4</option>
		</select>
	</div>
	<button type="submit" value="submit" class="btn btn-default">SUBMIT</button>
</div>	
</form>
</div>
