<?php
//expect an array of $person. Display a table. 
require_once '_navbar.php';
?>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #d74242;
  color: white;
  
}

</style>
</head>
<?php 
if (isset($_SESSION['principal']) && isset($_SESSION['role'])) {
            if($_SESSION['role'] == '2'){
                echo "<a class = 'btn btn-light' href = 'newProductForm.php'>Add New Product</a>";
            }
}
?>
<a class = "btn btn-light" href = "showCart.php">Cart</a>
<table id="customers">
<tr>
	<th>
	Buttons
	</th>
	<th>
	Buttons
	</th>
    <tH>
    ID
    </tH>
    <tH>
    PRODUCT NAME
    </tH>
    <tH>
    DESCRIPTION
    </tH>
    <tH>
    PRICE
    </tH>
    <th>
	Buttons
	</th>
</tr>

<?php 
for($x = 0; $x < count($products); $x++){
    
    echo "<tr>";
    echo "<td><form action='editProductForm.php'><input type='hidden' name='id' value=". $products[$x]['id'] ."><input type='submit' value='Edit'></form></td>";
    echo "<td><form action='processDeleteProduct.php'><input type='hidden' name='id' value=". $products[$x]['id'] ."><input type='submit' value='Delete'></form></td>";
    echo "<td>" .$products[$x]['id'] ."</td>";
    echo "<td>" .$products[$x]['productname'] ."</td>";
    echo "<td>" .$products[$x]['description'] ."</td>";
    echo "<td>" .$products[$x]['price'] ."</td>";
    echo "<td><form action='processAddToCart.php'><input type='hidden' name='id' value=". $products[$x]['id'] ."><input type='submit' value='Add To Cart'></form></td>";
    
    echo "</tr>";
}
?>
</table>

