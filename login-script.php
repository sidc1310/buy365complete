<?php     //start php tag
//include connect.php page for database connection
//Include('connect.php');
$aVar = mysqli_connect('localhost','root','12345','buy365web');
//if submit is not blanked i.e. it is clicked.
if (isset($_REQUEST['SUBMIT_MESSAGE'])) //here give the name of your button on which you would like    //to perform action.
{
// here check the submitted text box for null value by giving there name.
  if($_REQUEST['InputEmail']=="" || $_REQUEST['InputPassword']=='')
  {
  echo " Enter the correct data....";
  }
  else
  {
        $Useremail = $_POST['InputEmail'];
        $UserPassword = $_POST['InputPassword'] ; 
         
        //$sql="SELECT email FROM persons WHERE email=' ".$Useremail.”'' and password=’”.$UserPassword.”’”;
        $r="SELECT email FROM persons WHERE email='".$Useremail."' and password='".$UserPassword."'"; 
        $r = mysqli_query($aVar,$r);
        /*if(!$r) {
           $err=mysql_error();
           print $err;
           exit();
        }
        if(mysql_affected_rows()==0){
           print "no such login in the system. please try again.";
           exit();
        }
        else{
           print "successfully logged into system.";
           //proceed to perform website’s functionality – e.g. present information to the user
        }*/

        if(mysqli_num_rows($r)>0)
        {
          //echo "LOGIN SUCCESFUL....";
          session_start();
          while($row=mysqli_fetch_array($r))
          {
            $_SESSION['user_email']=$row['email'];
          }
          header('LOCATION:home.php');
        }
        else
        {

          echo "password or email id is not correct...";
        }



  }
}
?>
