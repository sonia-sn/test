<!DOCTYPE html>
<html>
    <head>
<title> Update</title>
</head>
<body>

<h2>Form Update</h2>

<?php

include 'connect.php';


$n=$_GET['name'];
$q="select * from student where Name='$n'";
$result=$con->query($q);


while ($row=$result->fetch_assoc()){



	
//fetch value from database in row variable
$name=$row['Name']; //from database selected column value
$age=$row['age'];
$course=$row['Course'];	
}




//form insert value 
if (isset($_POST['submit'])){
$name= $_POST['fname'];
$age=$_POST['age'];
$course=$_POST['cname'];
//update using sql
$update="update student set Name= '$name', AGE='$age', Course= '$course' where Name = '$n'";
 $result= $con->query($update);
 //redirect to main page using header() library function in php

header("location: /web/show.php ");

}


?>

<form method='post'>
  <label >Student name:</label><br>
  <input type="text"  name="fname" value="<?php  echo $name ?>" required><br>
  <label >Age:</label><br>
  <input type="number" name="age" value="<?php echo $age ?>" required ><br><br>
  <label >Course name:</label><br>
  <input type="text"  name="cname" value="<?php echo $course ?> "><br>
  <input type="submit" name= "submit" value="Submit">
</form> 



</body>
</html>