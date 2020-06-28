<?php 
include"phome.php";
include"connect.php";

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet"/>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feedback</title>
<style>
.h2
{
	margin-left:25px;
	color:#0CC;
	font-family:"Comic Sans MS", cursive;
}
</style>
</head>

<body>
<h2 class="h2">Share your valuable feedback with us so that we can improve our services and deliver the best to you......</h2>
<div class="container container-fluid">
	<div class="panel panel-default panel-info">
     	<div class="panel-heading text-center text-nowrap">
        <h2>Enter Your Feedback</h2>
        </div>
        <div class="panel-body">
         <?php
            if(isset($_GET['success']))
			{
				?>
                <div class="navbar alert alert-success">Feedback Sent Successfully..</div>
                <?php
			}
		  ?>
          
           <?php
            if(isset($_GET['error']))
			{
				?>
                <div class="navbar alert alert-danger">Some Database Issues...</div>
                <?php
			}
		  ?>
          <?php $res1= mysqli_query($con,"select * from account where username='$_SESSION[my]'")or die(mysqli_error());?>
        <div class="form-control-static container-fluid">
        	<form action="feedbackreg.php" method="post" enctype="multipart/form-data">
            	<div class="form-horizontal"><span class="glyphicon glyphicon-credit-card"></span>
                <label>Account Number:</label>
                <input type="number" name="account" value="<?php $acc=$_REQUEST['account']; echo $acc; ?>" class="form-control" readonly="readonly" />
                </div>
                <br/>
                <br/>
                <div class="form-horizontal"><span class="glyphicon glyphicon-time"></span>
                    <label>Message:</label>
                    <input type="message" name="msg" required="required"autocomplete="off" class="form-control"/>
                 </div>
                <br/>
                
                <button type="submit" class="form-control btn btn-xs btn-success"><span class="glyphicon glyphicon-envelope"></span> Submit</button>
                </form>

</body>
</html>