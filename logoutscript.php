<?php
 session_start();
 session_destroy();

 unset($_SESSION['user_email']);

 header("Refresh:2; url=index2.php");
 echo "<br><br><br><br>  LOGGING YOU OUT....";

 ?>