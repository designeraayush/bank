<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css" />
<style>
.div1
{
	border-color:#309;
	background:#306;
	padding:20px;
	transition:ease-in;
	transition-duration:1s;
	width:250px;
}

.div1:hover
{
	background:#6F0;
	animation:ease-out;
	animation-duration:1s;
	width:1365px;
}
.a
{
	text-decoration:none;
}
.div2
{
	border-color:#309;
	background:#0CF;
	padding:20px;
	transition-timing-function:cubic-bezier(x1,y1,x2,y2);
	transition-duration:1s;
	width:250px;
}

.div2:hover
{
	background:#C0C;
	
	width:1365px;
}

</style>

</head>

<body>
<?php
 include"check.php";
  include"connect.php";
?>
<div class="navbar navbar-default navbar-inverse">
 <div class="container">
  <div class="navbar-header" style="color:#C06">
  <h2>Welcome: <?php echo $_SESSION['my'];?> </h2>
  </div>
	<div class="collapse navbar-collapse navbar-right">
         <ul class="nav navbar-nav nav-pills">
             <li><a href="chome.php" style="margin-right:10px; padding:10px; background:#C06; border:#F00; margin-top:10px; border-radius:10px;">Home</a></li>
            <li><a href="recent.php" style="margin-right:10px; padding:10px; background:#C06; border:#FFF; margin-top:10px; border-radius:10px;">Recently Opened</a></li>
            <li><a href="openacc.php" style="margin-right:10px; padding:10px; background:#C06; border:#FFF; margin-top:10px; border-radius:10px;">Account Opening</a></li>
             <li><a href="deposit.php" style="margin-right:10px; padding:10px; background:#C06; border:#F00; margin-top:10px;  border-radius:10px;">Deposit</a></li>
             <li><a href="withdraw.php" style="margin-right:10px; padding:10px; background:#C06; border:#F00; margin-top:10px; border-radius:10px;">Withdraw</a></li>
            
            <li><a href="process.php" style="margin-right:10px; padding:10px; background:#C06; border:#F00; margin-top:10px; border-radius:10px;">Processing Queue</a></li>
            <li><a href="users.php" style="margin-right:10px; padding:10px; background:#C06; border:#F00; margin-top:10px; border-radius:10px;">Users</a></li>
            <li><a href="corplogout.php"style="margin-right:10px; padding:10px; background:#C06; border:#F00; margin-top:10px; border-radius:10px;" class="btn btn-success"><span class="glyphicon glyphicon-log-out"></span> SignOut</a></li>
           
         </ul>
       </div>
  </div>  
</div>
<h4 align="right">Last logged in:<?php $res= mysqli_query($con,"select * from admin where a_id='$_SESSION[my]'")or die(mysqli_error());
 while($row=mysqli_fetch_array($res)){ ?>
   <?php echo $row[4];?>
  
  <?php }?>

</h4>