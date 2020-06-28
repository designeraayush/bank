<?php include"connect.php";

$id=$_REQUEST['id'];
$b=$_REQUEST['b'];

	  if($b=='accept')
	  {
	  mysqli_query($con,"update admin set a_status='A' where a_id='$id'")or die(mysqli_error($con));
	  
	  if(mysqli_affected_rows($con)>0)
	  {
		 header("Location:adminauth.php?success");
	  }
	  else
	  {
		  header("Location:adminauth.php?error");

	  }
	  }
	  else
	  {
		  mysqli_query($con,"update admin set a_status='R' where a_id='$id'")or die(mysqli_error($con));
	  
	  if(mysqli_affected_rows($con)>0)
	  {
		 header("Location:adminauth.php?success");
	  }
	  else
	  {
		  header("Location:adminauth.php?error");

	  }
	  }
?>