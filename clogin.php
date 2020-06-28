<?php
  session_start();
    include("connect.php");
    $user=$_POST['user'];
	$pass=$_POST['pass'];
	//sleep(10);
	$res=mysqli_query($con,"select * from admin where a_id='$user' and a_pwd='$pass' and a_status='A'");
	if(mysqli_affected_rows($con)==1)
	{
		session_start();
		$_SESSION['my']=$user;
		header("Location:chome.php");
	}
	else
	{
		header("Location:corplogin.php?err=Username and password is Incorrect..");
		echo"Username or Passwords Dont Match.........";
	}

?>