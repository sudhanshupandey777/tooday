
<?php

session_start();






$matter=$_REQUEST['matter'];

$feedback=$_REQUEST['feedback'];



//connecting to that citydatabse
include('dbcon.php');




$q= "insert into feeback (matter ,feedback )values ('$matter','$feedback')";

$send=mysqli_query($con, $q) or die( mysqli_error($con));

if($send == 1)
{


 echo $send;

}
?>

