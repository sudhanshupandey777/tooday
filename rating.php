
<?php

session_start();






$rating=$_REQUEST['z'];




//connecting to that citydatabse
include('dbcon.php');



$q= "insert into rating (rating )  values ('$rating')";

$send=mysqli_query($con, $q) or die( mysqli_error($con));





 echo $send;


?>

