<?php include"connect.php";

$account=$_POST['account'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$name=$_POST['name'];
$branch=$_POST['branch'];
mysqli_query($con,"insert into admin values('$user','$pass','$name','$branch','NULL','P')")or die(mysqli_error($con));
	  
	  if(mysqli_affected_rows($con)>0)
	  {
		 header("Location:adminsignup.php?success");
	  }
	  else
	  {
		  header("Location:adminsignup.php?error");
		  //echo "Account Number not found";
	  }
	  
?>