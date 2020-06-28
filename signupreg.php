<?php include"connect.php";

$account=$_POST['account'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$name=$_POST['name'];
mysqli_query($con,"select * from account where a_no='$account'")or die(mysqli_error($con));
	  
	  if(mysqli_affected_rows($con)>0)
	  {
		 mysqli_query($con,"update account set username='$user',password='$pass' where a_no='$account'")or die(mysqli_query($con));
		mysqli_query($con,"insert into user values('$user','$name','$pass',sysdate(),$account,'P')")or die(mysqli_query($con)); 
		 header("Location:signup.php?success");
	  }
	  else
	  {
		  header("Location:signup.php?error");

	  }
	  
?>