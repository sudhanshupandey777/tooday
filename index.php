
<?php


session_start();



if(isset($_SESSION['mobile']))
{
  header("location:home.php");
}


?>






<!DOCTYPE html>
<html>
<head>
	<title>Tooday-Login or Signup</title>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="index.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   
   

   <script src="index.js" ></script>
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>







<body rel="Tooday-Login" >

<?php require 'loginheader.php' ?>










<div class="container-fluid ">

  <div class="d-flex mt-3 mt-md-4 flex-row flex-wrap  bd-highlight "  >

 


  <div class=" p-5 flex-fill  text-center bd-highlight" id="abx"  >
  <div  class="card border-0 mt-0 "  >
    <div class="card-body ">
 <img src="icon/toodaylogo.png"   style="width:400px;height: 250px;object-fit:cover;">
    </div>
    <div class="card-body">
     <h1 class="card-title text-center ml-4 text-dark" style="font-family: Segoe UI Emoji;width: 100%;color:black;margin-top: -40px;">" Social Community App "</h1>
    </div>
  </div>
</div>



  <div class=" p-md-5  flex-fill text-center bd-highlight" >

  <div id="createaccount" class="card border-0  mt-4 ">
    

<!-- Create Account -->

    <div  class="card-body text-center ">
     <a href="signup.php" > <button id="account" type="button" class=" abc btn btn-info btn-lg " style="border-radius: 25px" >Create a new Account</button></a>
    </div>
    


    <div  class="text-center mb-5 mt-5"><pre class="text-success">- - - - - - - - -  OR  - - - - - - - -</pre></div>
     

<!-- Log in -->

     
     <div  class="card-body">
      <a href="login.php"> <div class="card-title text-center  " > <button  type="button" class="abc btn btn-primary  btn-lg" style="border-radius: 25px"  >Log-in</button></a>
     </div>
    </div>


</div>


  </div>


<!--Create account -->















</div>














<!-- Footer -->

<div id= "downphoto" class="   navbar navbar-expand-sm fixed-bottom " style="height: 200px;width:100%;overflow: hidden;z-index:-9;margin-bottom: -11px;">

<img id="surfing" src="icon/home.png" style="height: 200px;width: 100%;object-fit: cover;">


</div>




</body>
</html>
