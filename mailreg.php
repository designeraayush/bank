<?php include"connect.php";

$account=$_POST['account'];
$subject=$_POST['subject'];
$text=$_POST['text'];


mysqli_query($con,"insert into acknowledgement(ac_accno,ac_subject,ac_msg,ac_time) values('$account','$subject','$text',sysdate())")or die(mysqli_error($con));
 
	  if(mysqli_affected_rows($con)>0)
	  {
		   	
		 header("Location:mail.php?success");
	  }
	  else
	  {
		  header("Location:mail.php?error");
	  }
	  
?>