<?php include"connect.php";

$id=$_REQUEST['id'];
$b=$_REQUEST['b'];

	  if($b=='accept')
	  {
	  mysqli_query($con,"update user set u_status='A' where u_id='$id'")or die(mysqli_error($con));
	  
	  if(mysqli_affected_rows($con)>0)
	  {
		 header("Location:users.php?success");
	  }
	  else
	  {
		  header("Location:users.php?error");

	  }
	  }
	  else
	  {
		  mysqli_query($con,"update user set u_status='R' where u_id='$id'")or die(mysqli_error($con));
	  
	  if(mysqli_affected_rows($con)>0)
	  {
		 header("Location:users.php?success");
	  }
	  else
	  {
		  header("Location:users.php?error");

	  }
	  }
?>