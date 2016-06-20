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
        <li><a href="wishlist.php"><span class="glyphicon glyphicon-heart-empty"></span> WishList</a></li>
        <li><a href="orderhis.php"><span class="glyphicon glyphicon-list-alt"></span> OrderHistory</a></li>
        <li><a href="settingspg.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>  
        <li><a href="logoutscript.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>       

      </ul>
    </div>
  </div>
</nav>

<div class="container" style="margin-top:70px">
  <h2>Your Cart</h2><br><br>
                                                                                       
  <div class="table-responsive">          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>#Item_id</th>
        <!--<th>ITEM NAME</th>-->
        <th>PRICE</th>        
      </tr>
    </thead>
    <?php

        Include('connect.php');
        //Include('cartupdate.php');

        $sum=0;
        $que="SELECT item_id,price FROM products WHERE cart='1' ";
        $res=mysqli_query($mysqli,$que);

        while($row=mysqli_fetch_array($res))
        {
          $sum+=$row["price"];
          $id=$row["item_id"];
          echo "<tr>
          <td>"."#".$row["item_id"]."</td>
          <td>".$row["price"]."</td>
          <td><a href='remove.php?id={$row["item_id"]}' style='color:#0000ff;'> Remove </a></td></tr>";

          echo "<tr><td>Total</td><td>".$sum."</td><td><a href='success.php?itemsid=".$id."' class='btn-btn-primary'>Confirm</a></td><</tr>";

        }





        ?>
    
  </table>
  </div>
</div>
</body>
</html>



