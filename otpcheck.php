<?php



session_start();
$mobile=$_REQUEST["q"];
$_SESSION["mobile"]=$mobile;

$_SESSION['count']=0;

include('dbcon.php');


$fetch_user_data="select * from user_info where mobile='$mobile'";


$data=mysqli_query($con, $fetch_user_data) or die (mysqli_error($con));

$alldata=mysqli_fetch_array($data);

$row['name']=$alldata[2];
$row['profilepic']=$alldata[8];


echo $row["name"].'|$|'.$row["profilepic"];




?>