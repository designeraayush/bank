<?php include"connect.php";

$account=$_POST['account'];
$withraw=$_POST['amount'];
$details=$_POST['details'];
mysqli_query($con,"update account set a_bal=a_bal-'$withraw' where a_no='$account'")or die(mysqli_error($con));
	  
	  if(mysqli_affected_rows($con)>0)
	  {
		   mysqli_query($con,"insert into transaction(t_acno,t_details,t_amount,t_type,t_date) values('$account','$details','$withraw','Debit',sysdate())")or die(mysqli_error($con));	
		 header("Location:withdraw.php?success");
		  mysqli_query($con,"insert into acknowledgement(ac_accno,ac_subject,ac_msg,ac_time)  values('$account','Paid','Succesfully paid $withraw from your account $account',sysdate())")or die(mysqli_error($con));
	  }
	  else
	  {
		  header("Location:withdraw.php?error");
	  }
	  
?>