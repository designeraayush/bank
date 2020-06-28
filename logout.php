<?php
  session_start();
  include"connect.php";
  mysqli_query($con,"update account set time=sysdate() where username='$_SESSION[my]'")or die(mysqli_error($con));
  session_destroy();
  header("Location:index.php");


?>