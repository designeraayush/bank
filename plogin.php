<?php
  session_start();
    include("connect.php");
    $username=$_POST['user'];
	$pass=$_POST['pass'];
	//sleep(10);
	$res=mysqli_query($con,"select * from account where username='$username' and password='$pass'");
	if(mysqli_affected_rows($con)==1)
	{
		
		$_SESSION['my']=$username;
		
		header("Location:pershome.php");
	}
	else
	{
		header("Location:plogin.php?err=Username and password is Incorrect..");
		//echo"Username or Passwords Dont Match.........";
	}

?>

<html>
<body>
<form method="post" action="balance.php">

<input type="hidden" name="<?php $username ?>" />

</form>
</body>
</html>