<?php
session_start();
if (!isset($_SESSION['username']) || empty($_SESSION['username']){
  header("Location: mail_login.php");
}

?>
<html>
<body>
Welcome <?php echo $_SESSION['username']; ?>
Login Successful
</body>
</html>  