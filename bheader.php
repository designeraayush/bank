<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Branch Home</title>
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
  <div class="navbar-header" style="color:#F63">
  <h2>Welcome: <?php echo $_SESSION['my'];?> </h2>
  </div>
	<div class="collapse navbar-collapse navbar-right">
         <ul class="nav navbar-nav nav-pills">
             <li><a href="bhome.php" style="margin-right:10px; padding:10px; background:#F63; color:#FFF; border:#F00; margin-top:10px; border-radius:10px;">Home</a></li>
            <li><a href="viewfeedbacks.php" style="margin-right:10px; padding:10px; background:#F63; color:#FFF; margin-top:10px; border-radius:10px;">View Feedbacks</a></li>
            
            <li><a href="adminauth.php" style="margin-right:10px; padding:10px; background:#F63; color:#FFF; margin-top:10px; border-radius:10px;">Admin Authorization</a></li>
            <li><a href="veradmin.php" style="margin-right:10px; padding:10px; background:#F63; color:#FFF; margin-top:10px; border-radius:10px;">Branch Admin Profiles</a></li> 
            <li><a href="corplogin.php" style="margin-right:10px; padding:10px; background:#F63; color:#FFF; margin-top:10px; border-radius:10px;">Admin Login</a></li>
            <li><a href="blogout.php"style="margin-right:10px; padding:10px; background:#F63; color:#FFF;border:#F00; margin-top:10px; border-radius:10px;" class="btn btn-success"><span class="glyphicon glyphicon-log-out"></span> SignOut</a></li>
           
         </ul>
       </div>
  </div>  
</div>
