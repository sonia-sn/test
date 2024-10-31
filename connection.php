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


?>