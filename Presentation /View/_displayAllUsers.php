<?php
//expect an array of $person. Display a table. 

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
    FIRST NAME
    </tH>
    <tH>
    LAST NAME
    </tH>
    <tH>
    USER NAME
    </tH>
    <tH>
    PASSWORD
    </tH>
    <tH>
    ROLE
    </tH>
</tr>

<?php 
for($x = 0; $x < count($persons); $x++){
    
    echo "<tr>";
    echo "<td><form action='editUserForm.php'><input type='hidden' name='id' value=". $persons[$x]['id'] ."><input type='submit' value='Edit'></form></td>";
    echo "<td><form action='processDeleteUser.php'><input type='hidden' name='id' value=". $persons[$x]['id'] ."><input type='submit' value='Delete'></form></td>";
    echo "<td>" .$persons[$x]['id'] ."</td>";
    echo "<td>" .$persons[$x]['firstname'] ."</td>";
    echo "<td>" .$persons[$x]['lastname'] ."</td>";
    echo "<td>" .$persons[$x]['username'] ."</td>";
    echo "<td>" .$persons[$x]['password'] ."</td>";
    echo "<td>" .$persons[$x]['role'] ."</td>";
    
    echo "</tr>";
}
?>
</table>

