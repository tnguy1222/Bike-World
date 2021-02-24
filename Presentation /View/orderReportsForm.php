<?php
require_once 'AutoLoader.php';
require_once 'header.php';
?>
<head>
<style>
label {
  margin-bottom: 10px;
  display: block;
}
body { 
 background-color: white; 
 color: red; 
 font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}
.centerHalf { 
 margin: auto;
 height:400px; 
 padding: 40px;
 position: relative;
 border: 15px solid #80ffbf;
 border-radius: 50px;
 background-color: while;
 color:red; 
 
}
input {
 width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
h1 {
 color:red;
 
}
h2 { 
  color:black; 
}
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
</style>
</head>

<body>

<h1>Generate a product sales report:</h1>
<div class = "centerHalf">
<form class = "inputForm" action = "processOrderReports.php">
<div class = "form-group">
<label for = "startdate">
Start Date:
</label>
<input class = "form-control" name = "startdate" type= "date">
</div>

<div class = "form-group">
<label for = "enddate">
End Date:
</label>
<input class = "form-control" name = "enddate" type= "date">
</div>

<a class = "btn btn-light" href = "">Cancel</a>
<input class = "btn btn-primary" type = "submit" value = "Generate Report">
</form>
</div>
</body>