<?php
require_once 'AutoLoader.php';

//get the search term from the input form
$searchPhrase = $_GET['name'];

//create an instance of the business service
$ubs = new UserBusinessService();

// the find method returns an array of person
$persons = $ubs->findByFirstName($searchPhrase);
?>
<h2> Search Result</h2>
<p>Result<p>

<?php 
if($persons){
    //we got some results
    include('_displaySearchUsers.php');
}else{
    echo 'No result found <br>';
}

?>

