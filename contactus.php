<?php
/* Set Variables */


session_start();

if ((isset($_SESSION['user_email']) && $_SESSION['user_email'] != ''))
 {

   header ("LOCATION:home.php");

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
      <a class="navbar-brand" href="#">Buy365</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="index2.php">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">BestDeals</a></li>   
        <li><a href="#"><span class="glyphicon glyphicon-search"></span> Search</a></li>     
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>

        <li><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
        <li><a href="aboutus.php"><span class="glyphicon glyphicon-menu-hamburger"></span> AboutUs</a></li>  
        <li class="active"><a href="contactus.php"><span class="glyphicon glyphicon-earphone"></span> ContactUs</a></li>       

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
        <form action="login-script.php" method="post" role="form">
              <div class="modal-body">
                <div class="form-group">
              <label for="InputEmail">Email address</label>
              <input class="form-control" name="InputEmail" id="InputEmail" placeholder="Enter email" type="email">
              </div>
            <div class="form-group">
              <label for="InputPassword">Password</label>
            <input class="form-control" id="InputPassword" name="InputPassword" placeholder="Password" type="password">
            </div>
                <p class="text-right"><a href="#">Forgot password?</a></p>
              </div>
              <div class="modal-footer">
                <!--<a href="#" data-dismiss="modal" class="btn">Close</a>-->

                   <div class="col-xs-6 col-sm-6 col-md-6">
                       <input type="submit" name="SUBMIT_MESSAGE" value="LOG-IN" class="btn btn-lg btn-success btn-block">
                  </div>



                <!--<a href="#" class="btn btn-primary">Log-in</a>-->
              </div>
        </form>
      </div>
    </div>
</div>

<div class="container-fluid" style="margin-top:60px">
  
    <div class="row">
      <div class="container">
              <div class="col-sm-12 " style="background-color:lavender; padding:20px;">                  
             
              <p>We offer 24x7 Live Support</p>
              <p>You can contact us anytime anyday.Our team will try their best to get back to you as soon as possible.<br> If you want leave us a message, you can do that below.</p>

            </div>            
    </div>
  </div>
</div>


<div class="container" style="margin-top:20px ">
    <h3 class="well">Leave us a message...</h1>
  <div class="col-lg-12 well">
  <div class="row">
        <form action="contactus.php" method="post" role="form">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-12 form-group">
                <label for="userName">Name</label>
                <input type="text" placeholder="Enter Your Name Here.." name="userName" id="userName" class="form-control">
              </div>
              
            </div>          
            <div class="form-group">
              <label for="Your_Message">Your Message</label>
              <textarea placeholder="Enter Message Here.." rows="4" name="Your_Message" id="Your_Message" class="form-control"></textarea>
            </div>             
                        
              
          <div class="form-group">
            <label for="Email_Address">EmailAddress</label>
            <input type="text" placeholder="Enter Your Email Address Here.." name="Email_Address" id="Email_Address" class="form-control">
          </div>  
        
               
          <!--<div class="form-group">
               <button type="button" class="btn btn-lg btn-info" name="SUBMIT_MESSAGE"  >Submit</button>  
               <!--<input type="submit" name="Submit" value="Login" class="btn btn-lg btn-success btn-block">
          </div>-->

          <div class="col-xs-6 col-sm-6 col-md-6">
              <input type="submit" name="SUBMIT_MESSAGE" value="SUBMIT" class="btn btn-lg btn-success btn-block">
            </div>

          <!--<a class="btn btn-primary" href="contact-script.php" role="button">SUBMIT</a>-->

          </div>
        </form> 
        </div>
  </div>
</div>


<?php     //start php tag
//include connect.php page for database connection
Include('connect.php');
//if submit is not blanked i.e. it is clicked.
if (isset($_REQUEST['SUBMIT_MESSAGE'])) //here give the name of your button on which you would like    //to perform action.
{
// here check the submitted text box for null value by giving there name.
  if($_REQUEST['userName']=="" || $_REQUEST['Your_Message']==""||$_REQUEST['Email_Address']=="")
  {
        echo " All the fields must be filled";
  }



  else
  {
      
      $u_name=$_POST['userName'];
      $eid=$_POST['Email_Address'];
      $mes=$_POST['Your_Message'];
      $sql = "INSERT INTO contact_us (name,email,message) VALUES ('$u_name','$eid','$mes')";
      $insert = $mysqli->query($sql);
  
       // Print response from MySQL
        if ( $insert ) 
        {
            echo "Success! Row ID: {$mysqli->insert_id}";
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



<footer class="container-fluid text-center " style="margin-top:30px">
  <p>Copyright&copy NILESH PRASAD</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>



</body>
</html>

    