<?php 
Include('connect.php');
Include('cartpg.php');


//$query="UPDATE SET cart='0' WHERE item_id='1'";

$eid=$_GET['id'];
$sql = "UPDATE products SET cart='0' WHERE item_id = $eid" ;
$result=mysqli_query($mysqli,$sql);

//$query="UPDATE products SET cart='0' WHERE"."$eid".='1'";

?>
