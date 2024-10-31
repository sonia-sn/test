<html>
<body>


<?php
//database connection
$localhost = "localhost";

$user = "root";

$password ="";

$database = "web";

$con = new mysqli($localhost,$user,$password,$database);


// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }

if(isset($_POST['submit'])){

    $name=$_POST['name1'];
    
    $age=$_POST['age'];
    
    $course=$_POST['course1'];
    
    $insertQ= "insert into student (Name,age,Course) values ('$name','$age','$course')";
    
     $result= $con->query($insertQ);
     echo "world";
    }
    
    else{
echo "hello";
    }
?>



<center>

<form method="post">

<label >Name:</label><br>

<input type="text" name="name1" value="" required><br>

<label >Age:</label><br>

<input type="number" name="age" value=""><br><br>

<label >Course:</label><br>

<input type="text" name="course1" value=""><br> <br> <br>

<input type="submit" name = "submit" value="Submit">

</form>

</center>

</body>
</html>