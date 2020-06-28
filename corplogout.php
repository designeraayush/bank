<?php
  session_start();
  include"connect.php";
  mysqli_query($con,"update admin set a_lastlogin=sysdate() where a_id='$_SESSION[my]'")or die(mysqli_error($con));
  session_destroy();
  header("Location:index.php");


?>