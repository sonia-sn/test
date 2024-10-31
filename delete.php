<?php
include "connect.php";


$name1=$_GET['name'];

$query="delete from student where Name='$name1'";  


$con->query($query);

//redirect to main page using header() library function in php

header("location: /web/show.php ");

?>