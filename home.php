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
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"></span> Buy365 Home</a>
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

<div class="container " style="margin-top:100px">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Samsung Galaxy J5 - 6 (New 2016 Edition)</div>
        <div class="panel-body"><img src="mobileimages/galaxyj7.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
               <!-- <a href="cartupdate.php" role="button" data-toggle="modal" name="id1" class="btn btn-primary btn-block">Add to cart!</a></div>-->
               <form action="cartupdate.php" role="form">
               <input type="submit" name="id1" value="Add to cart!" class="btn btn-primary btn-block">
               </form>
               </div>             
               
                
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">Samsung Galaxy Core Prime</div>
        <div class="panel-body"><img src="mobileimages/samsunggalaxycoreprime.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
                <form action="cartupdate.php" role="form">
                    <input type="submit" name="id2" value="Add to cart!" class="btn btn-primary btn-block">
               </form>
               </div>

      </div>
    </div>

    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Redmi 2 Prime</div>
        <div class="panel-body"><img src="mobileimages/Redmi-2-Prime.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">

            <form action="cartupdate.php" role="form">
                    <input type="submit" name="id3" value="Add to cart!" class="btn btn-primary btn-block">
               </form>
               </div>
        

      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading">Lenovo K3 Note</div>
        <div class="panel-body"><img src="mobileimages/lenovok3.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">

             <form action="cartupdate.php" role="form">
                    <input type="submit" name="id4" value="Add to cart!" class="btn btn-primary btn-block">
            </form>
         </div>
        

      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Micromax Canvas Evok</div>
        <div class="panel-body"><img src="mobileimages/canvas-evok2.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">

       <form action="cartupdate.php" role="form">
                    <input type="submit" name="id5" value="Add to cart!" class="btn btn-primary btn-block">
            </form>
         </div>
        

      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">Micromax Canvas Amaze 2</div>
        <div class="panel-body"><img src="mobileimages/canvasamaze.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">

         <form action="cartupdate.php" role="form">
                    <input type="submit" name="id6" value="Add to cart!" class="btn btn-primary btn-block">
            </form>
         </div>

      </div>
    </div>
  </div>
</div><br><br>
</body>
</html>


