<?php include"connect.php";

$account=$_POST['account'];
$msg=$_POST['msg'];



mysqli_query($con,"insert into feedback(f_accno,f_date,f_msg) values('$account',sysdate(),'$msg')")or die(mysqli_error($con));
 
	  if(mysqli_affected_rows($con)>0)
	  {
		   	
		 header("Location:feedback.php?success");
	  }
	  else
	  {
		  header("Location:feedback.php?error");
	  }
	  
?>