<?php
   session_start();
   if(!isset($_SESSION['my']))
   {
	   header("Location:login.php?err=Session Expired Please Login Again...");
	   exit(0);
   }

?>