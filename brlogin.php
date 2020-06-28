<?php
  session_start();
    include("connect.php");
    $user=$_POST['user'];
	$pass=$_POST['pass'];
	//sleep(10);
	$res=mysqli_query($con,"select * from bank where b_id='$user' and b_pass='$pass'");
	if(mysqli_affected_rows($con)==1)
	{
		session_start();
		$_SESSION['my']=$user;
		header("Location:bhome.php");
	}
	else
	{
		header("Location:blogin.php?err=Username and password is Incorrect..");
		echo"Username or Passwords Dont Match.........";
	}

?>