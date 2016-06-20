<?php
/* Set Variables */


session_start();

if (!(isset($_SESSION['user_email']) && $_SESSION['user_email'] != ''))
 {

   header ("LOCATION:index2.php");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>JustBuy365</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar 
    {
      margin-bottom: 50px;    
      color:white;
      margin-top: 0;  
      border-radius: 0;
      background-color:;
    }

    footer
    {
      background-color:#f2f2f2;
      padding: 25px;
    }
  </style>

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php"><span class="glyphicon glyphicon-home"></span> Buy365 Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right">

        <li><a href="cartpg.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
        <li><a href="wishlist.pg"><span class="glyphicon glyphicon-heart-empty"></span> WishList</a></li>
        <li><a href="orderhis.php"><span class="glyphicon glyphicon-list-alt"></span> OrderHistory</a></li>
        <li><a href="settingspg.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>  
        <li><a href="logoutscript.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>       

      </ul>
    </div>
  </div>
</nav>

 <div class="container-fluid" style="margin-top:70px">
  
    <div class="row">
      <div class="container">
              <div class="col-sm-12" style="background-color:lavender; ">                  
              
              <p class="text-center" style="padding:40px">Thank you for ordering from Buy365.<br>The order shall be delivered to you very soon.</p>
              <p class="text-center">You can order more items <a href="home.php">here.</a></p>

       </div>

            
    </div>
  </div>
</div>
</body>
</html>

 
