<?php

require_once 'header.php';

require_once 'style.css';
?>

<h1> Add New Product</h1>
<div class="center">
<form action="processNewProduct.php" method ="POST">
<div class="container">
	<div class="form-group">
		<label for="productname">Product Name</label>
		<input type="text" class="form-control" id="productname" placeholder="Product Name" name="productname">
	</div>
	
	<div class="form-group">
		<label for="description">Description</label>
		<input type="text" class="form-control" id="description" placeholder="Description" name="description">
	</div>
	
	<div class="form-group">
		<label for="price">Price</label>
		<input type="text" class="form-control" id="price" placeholder="Price" name="price">
	</div>
	
	
	<button type="submit" value="submit" class="btn btn-default">SUBMIT</button>
</div>	
</form>
</div>
