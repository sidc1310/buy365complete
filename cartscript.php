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
	echo "<tr><td>"."#".'&nbsp'.$row["item_id"]."</td><td>".$row["price"]."</td><td><a href='remove.php?
	id={$row["item_id"]}' style='color:#0000ff;'> Remove </a></td></tr>";

	echo "<tr><td>Total</td><td>".$sum."</td><td><a href='success.php?itemsid=".$id."' class='btn-btn-primary'>Confirm</a></td><</tr>";

}





?>