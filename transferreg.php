<?php include"connect.php";
$b=$_REQUEST['b'];
if($b==NULL)
{
$my=$_POST['my'];
$payee=$_POST['payee'];
$withraw=$_POST['amount'];
$details=$_POST['details'];

$bal=mysqli_query($con,"select a_bal from account where a_no='$my'");

if($bal>$my)
{

mysqli_query($con,"update account set a_bal=a_bal-'$withraw' where a_no='$my'")or die(mysqli_error($con));
	  
	  if(mysqli_affected_rows($con)>0)
	  {
		  
		  mysqli_query($con,"insert into transaction(t_acno,t_pacno,t_details,t_amount,t_type,t_date,t_status) values('$my',$payee,'$details','$withraw','Debit',sysdate(),'P')")or die(mysqli_error($con));	
		 header("Location:transfer.php?success");
		  mysqli_query($con,"insert into acknowledgement(ac_accno,ac_subject,ac_msg,ac_time)  values('$my','Paid','Succesfully paid $withraw from your account $my',sysdate())")or die(mysqli_error($con));
			  
		  
	  }
	  else
	  {
		  header("Location:trasnfer.php?error");
	  }
}
else
{
   header("Location:transfer.php?error");
}
}
else
{
	$id=$_REQUEST['id'];
	$account=$_REQUEST['acc'];
	$amount=$_REQUEST['amt'];
    $det=$_REQUEST['det'];
	mysqli_query($con,"update account set a_bal=a_bal+'$amount' where a_no='$account'")or die(mysqli_error($con));
	mysqli_query($con,"update transaction set t_status='A' where t_id='$id'")or die(mysqli_error($con));	
	mysqli_query($con,"insert into transaction(t_acno,t_details,t_amount,t_type,t_date) values('$account','$det','$amount','Credit',sysdate())")or die(mysqli_error($con));	
		 header("Location:transfer.php?success");	  
	mysqli_query($con,"insert into acknowledgement(ac_accno,ac_subject,ac_msg,ac_time)  values('$account','Deposit','Succesfully Deposited 	$amount in your account $account',sysdate())")or die(mysqli_error($con));
	header("Location:process.php?success");

}
?>