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
    .navbar {
      margin-bottom: 70px;    
      color:white;
      margin-top: 0;  
      border-radius: 0;
      background-color:;
    }
    
    

       /* Add a gray background color and some padding to the footer */
    footer {
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
      <a class="navbar-brand" href="#">Buy365</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index2.php">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">BestDeals</a></li>   
        <li><a href="#"><span class="glyphicon glyphicon-search"></span> Search</a></li>     
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="signup.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>

        <li><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
        <li><a href="aboutus.php"><span class="glyphicon glyphicon-menu-hamburger"></span> AboutUs</a></li>  
        <li><a href="contactus.php"><span class="glyphicon glyphicon-earphone"></span> ContactUs</a></li>       

      </ul>
    </div>
  </div>
</nav>

<div class="modal fade" id="myModal">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Log-in</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email">
        </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
      <input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password">
      </div>
          <p class="text-right"><a href="#">Forgot password?</a></p>
        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Close</a>
          <a href="#" class="btn btn-primary">Log-in</a>
        </div>
      </div>
    </div>
</div>
</body>
</html>





<?php     //start php tag
//include connect.php page for database connection
Include('connect.php');
//if submit is not blanked i.e. it is clicked.
if (isset($_REQUEST['SUBMIT_MESSAGE'])) //here give the name of your button on which you would like    //to perform action.
{
// here check the submitted text box for null value by giving there name.
  if($_REQUEST['f_name']=="" || $_REQUEST['l_name']==""||$_REQUEST['user_address']==""||$_REQUEST['user_city']==""||$_REQUEST['user_state']==""||$_REQUEST['mobile']==""||$_REQUEST['e_id']==""||$_REQUEST['pass']=="")
  {
        echo " <br><br><br<br><br><br>All the fields must be filled";
  }



  else
  {
      
      $fir_name=$_POST['f_name'];
      $last_name=$_POST['l_name'];
      $u_add=$_POST['user_address'];
      $u_city=$_POST['user_city'];
      $u_state=$_POST['user_state'];
      $u_mobile=$_POST['mobile'];
      $u_eid=$_POST['e_id'];
      $u_password=$_POST['pass'];
      $sql = "INSERT INTO persons (firstname,lastname,contact,email,address,password,city,state) VALUES ('$fir_name','$last_name','$u_mobile','$u_eid','$u_add','$u_password','$u_city','$u_state')";
      $insert = $mysqli->query($sql);
  
       // Print response from MySQL
        if ( $insert ) 
        {
            echo "<br><br><br><br<br><br>CONGRATULATIONS ! YOU ARE A NEW MEMBER OF OUR COMMUNITY....<br>YOU CAN NOW LOGIN AND CONTINUE SHOPPING.... ";
            //echo "THANK YOU FOR REACHING OUT TO US, WE WILL GET BACK TO YOU AS SOON AS POSSIBLE....";

        } 
        else 
        {
            die("Error: {$mysqli->errno} : {$mysqli->error}");
        }
  
  // Close our connection
  $mysqli->close();
  }
} 
?>