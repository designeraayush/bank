<?php include"connect.php";

$account=$_POST['account'];
$deposit=$_POST['amount'];
$details=$_POST['details'];


mysqli_query($con,"update account set a_bal=a_bal+'$deposit' where a_no='$account'")or die(mysqli_error($con));
 
	  if(mysqli_affected_rows($con)>0)
	  {
		   mysqli_query($con,"insert into transaction(t_acno,t_details,t_amount,t_type,t_date) values('$account','$details','$deposit','Credit',sysdate())")or die(mysqli_error($con));
		   mysqli_query($con,"insert into acknowledgement(ac_accno,ac_subject,ac_msg,ac_time) values('$account','Deposit','Succesfully deposited $deposit in your account $account ',sysdate())")or die(mysqli_error($con));	
		 header("Location:deposit.php?success");
	  }
	  else
	  {
		  header("Location:deposit.php?error");
	  }
	  
?>