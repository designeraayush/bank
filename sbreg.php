<?php include"connect.php";

$name=$_POST['name'];
$dob=$_POST['dob'];
$father=$_POST['father'];
$mother=$_POST['mother'];
$aadhar=$_POST['aadhar'];
$number=$_POST['number'];

mysqli_query($con,"insert into acc(name,dob,father,mother,aadhar,number) values('$name','$dob','$father','$mother','$aadhar','$number')")or die(mysqli_error($con));
	  
	  if(mysqli_affected_rows($con)>0)
	  {
		 header("Location:sbacc.php?success");
	  }
	  else
	  {
		  header("Location:sbacc.php?error");
	  }
	  
?>