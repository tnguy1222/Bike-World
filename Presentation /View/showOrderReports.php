<?php 
include 'header.php';
include 'AutoLoader.php';

?>
<head>
<meta charset="UTF-8">
<title>Show Order Report Form</title>
<link href="https://fonts.googleapis.com/css?family=Vampiro+One" rel="stylesheet">
<style>
body { 
 background-color: white; 
 color: red; 
 font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
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

<script type="text/javascript">
    var datefield=document.createElement("input")
    datefield.setAttribute("type", "date")
    if (datefield.type!="date"){ //if browser doesn't support input type="date", load files for jQuery UI Date Picker
        document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n') 
    }
</script> 
<script>
if (datefield.type!="date"){ //if browser doesn't support input type="date", initialize date picker widget:
    jQuery(function($){ //on document.ready
        $('#startdate').datepicker({dateFormat: "yy-mm-dd"});
    })
}
if (datefield.type!="date"){ //if browser doesn't support input type="date", initialize date picker widget:
    jQuery(function($){ //on document.ready
        $('#enddate').datepicker({dateFormat: "yy-mm-dd"});
    })
}
</script>

</head>
<br><br><br>
<body>
<h1>Generate a product sales report:</h1>
<div class = "centerHalf">
<form class = "inputForm" action = "processOrderReports.php"> 
	<div class = "form-group" name = "startdate" type = "date">
		<label for = "startdate">
		Start Date: 
		</label>
		<input class = "form-control" name = "startdate" type= "date" id = "startdate">
	</div>
	<div class = "form-group" name = "enddate" type = "date">
		<label for = "enddate">
		End Date: 
		</label>
		<input class = "form-control" name = "enddate" type= "date" id = "enddate">
	</div>

	<a class = "btn btn-light" href = "index.php">Cancel</a>
	<input class = "btn btn-light" type = "submit" value = "Generate Report">
</form>

</div>
