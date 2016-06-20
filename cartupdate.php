<?php

Include('connect.php');



if (isset($_REQUEST['id1']))
{
	$query="UPDATE products SET cart='1' WHERE item_id='1'";
	$result=mysqli_query($mysqli,$query);


	if($result==true)
	{
    //echo "Records were updated successfully.";
		header ("LOCATION:cartpg.php");
    } 
    else
     {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
 	 }

    
}

if (isset($_REQUEST['id2']))
{
	$query="UPDATE products SET cart='1' WHERE item_id='2'";
	$result=mysqli_query($mysqli,$query);


	if($result==true)
	{
    //echo "Records were updated successfully.";
		header ("LOCATION:cartpg.php");
    } 
    else
     {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
 	 }

    //echo " thankyou...";

   //header ("LOCATION:cartscript.php");
}

if (isset($_REQUEST['id3']))
{
	$query="UPDATE products SET cart='1' WHERE item_id='3'";
	$result=mysqli_query($mysqli,$query);


	if($result==true)
	{
    //echo "Records were updated successfully.";
		header ("LOCATION:cartpg.php");
    } 
    else
     {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
 	 }

    //echo " thankyou...";

   //header ("LOCATION:cartscript.php");
}

if (isset($_REQUEST['id4']))
{
	$query="UPDATE products SET cart='1' WHERE item_id='4'";
	$result=mysqli_query($mysqli,$query);


	if($result==true)
	{
    //echo "Records were updated successfully.";
		header ("LOCATION:cartpg.php");
    } 
    else
     {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
 	 }

    //echo " thankyou...";

   //header ("LOCATION:cartscript.php");
}


if (isset($_REQUEST['id5']))
{
	$query="UPDATE products SET cart='1' WHERE item_id='5'";
	$result=mysqli_query($mysqli,$query);


	if($result==true)
	{
    //echo "Records were updated successfully.";
		header ("LOCATION:cartpg.php");
    } 
    else
     {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
 	 }

    //echo " thankyou...";

   //header ("LOCATION:cartscript.php");
}


if (isset($_REQUEST['id6']))
{
	$query="UPDATE products SET cart='1' WHERE item_id='6'";
	$result=mysqli_query($mysqli,$query);


	if($result==true)
	{
    //echo "Records were updated successfully.";
		header ("LOCATION:cartpg.php");
    } 
    else
     {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
 	 }

    //echo " thankyou...";

   //header ("LOCATION:cartscript.php");
}

?>