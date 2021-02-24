<?php
require_once 'AutoLoader.php';
require_once 'header.php';
require_once 'style.css';
require_once 'UserBusinessService.php';

$id = $_GET['id'];

$bs = new ProductBusinessService();

$product = $bs->findByID($id);

//echo "<pre>";
//print_r($person);
//echo "</pre>";

?>

<h1> Update Your Product</h1>
<div class="center">
<form action="processUpdateProduct.php" method ="POST">

<div class="container">

	<div class="form-group">
		<label for="id">ID</label>
		<input type="text" class="form-control" id="ID" value="<?php echo $product->getId()?> "name="id">
	</div>
	<div class="form-group">
		<label for="productname">Product Name</label>
		<input type="text" class="form-control" id="productname" value="<?php echo $product->getProductname()?> "name="productname">
	</div>
	
	<div class="form-group">
		<label for="description">Description</label>
		<input type="text" class="form-control" id="description" value="<?php echo $product->getDescription()?> " name="description">
	</div>
	
	<div class="form-group">
		<label for="price">Price</label>
		<input type="text" class="form-control" id="price" value="<?php echo $product->getPrice()?> " name="price">
	</div>
	
	
	<button type="submit" value="submit" class="btn btn-default">SUBMIT</button>
</div>	
</form>
</div>
