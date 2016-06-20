
 
 <?php
 //Set Variables 
$host="localhost";
$db="buy365web"; 
$username="root";
$pass="12345";
$mysqli=new mysqli($host,$username,$pass,$db);
if(mysqli_connect_error())
  {
    die('Connect Error ('. mysqli_connect_errno().') '. mysqli_connect_error());
}
/*else
{
echo 'Success... '. $mysqli->host_info ."\n";
$mysqli->close();

}*/


/*if ( ! empty( $_GET ) ) {
  
  // Connect to MySQL
  $mysqli = new mysqli( 'localhost', 'root', '12345', 'buy365web' );
  
  // Check our connection
  if ( $mysqli->connect_error ) {
    die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
  }*/

  
  // Insert our data
  $Name=$_POST['Name'];
  $Email=$_POST['Email Address'];
  $Yourmessage=$_POST['Your_Message'];

  if(empty($Name))
  {
  	echo " Please enter your name... ";
  	die();
  }

  if(empty($Email))
  {
  	echo " Please enter your email... ";
  	die();
  }

  if(empty($Yourmessage))
  {
  	echo " Please enter your message... ";
  	die();
  }




  $sql = "INSERT INTO contact_us (name,email,message) VALUES ('$Name','$Email','$Yourmessage')";
  $insert = $mysqli->query($sql);
  
  // Print response from MySQL
  if ( $insert ) {
    echo "Success! Row ID: {$mysqli->insert_id}";
  } else {
    die("Error: {$mysqli->errno} : {$mysqli->error}");
  }
  
  // Close our connection
  $mysqli->close();




?>

