<?php
//expect an array of $product. Display a table.

?>
<head>
<style>
#products {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#products td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#products tr:nth-child(even){background-color: #f2f2f2;}

#products tr:hover {background-color: #ddd;}

#products th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #d74242;
  color: white;
}
</style>
</head>

<table id="products">
<tr>
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
</tr>
<?php 
for($x =0; $x < count($products); $x++){
    
    echo "<tr>";
    
    echo "<td>" .$products[$x]['id'] ."</td>";
    echo "<td>" .$products[$x]['productname'] ."</td>";
    echo "<td>" .$products[$x]['description'] ."</td>";
    echo "<td>" .$products[$x]['price'] ."</td>";
   
    echo "</tr>";
}
?>
</table>

