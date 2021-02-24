<?php
require_once 'AutoLoader.php';

//get the search term from the input form
$searchPhrase = $_GET['productname'];

//create an instance of the business service
$pbs = new ProductBusinessService();

// the find method returns an array of product
$products = $pbs->findByProductName($searchPhrase);
?>
<h2> Search Result</h2>
<p>Result<p>

<?php 
if($products){
    //we got some results
    include('_displaySearchProducts.php');
}else{
    echo 'No result found <br>';
}

?>