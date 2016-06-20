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
	$sql = "INSERT INTO contact_us (name,email,message) VALUES ('$_POST['userName']','$_POST['Email_Address']','$_POST['Your_Message']')";
  $insert = $mysqli->query($sql);
  
  // Print response from MySQL
  if ( $insert ) {
    echo "Success! Row ID: {$mysqli->insert_id}";
  } else {
    die("Error: {$mysqli->errno} : {$mysqli->error}");
  }
  
  // Close our connection
  $mysqli->close();
  }
}	
?>