<html>
<style>
table, th, td {
  border: 1px solid black;
  }
  </style>
<body>

<table>

<th> Name</th>
<th> AGE</th>
<th>Course </th>
<th> Action </th> 

<?php

include "connection.php";


$squery="select * from student";
 $q= $con->query($squery);

While($row=$q->fetch_assoc()){
	echo "<tr>
	<td>$row[Name] </td>
	<td> $row[age]</td>
	<td> $row[Course]</td>
	
	<td> 

	<button> <a href='delete.php?name=$row[Name]'>Delete</a> </button>
	<button> <a href='update.php?name=$row[Name]'>Update</a> </button>	
	</td>
</tr>
	";
	
	
}




?>



</table>

</body>

</html>