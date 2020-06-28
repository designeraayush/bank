<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="bootstrap-3.3.7/bootstrap-3.3.7/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
<style>
.col1
{
	margin-left:150px;
	border:thick #006 2px;
	background:#003;
	height:300px;
	
}
.col2
{
	margin-left:100px;
	border-color:#060;
	background:#F00;
	height:300px;
}
.h2
{
	color:#CCC;
	text-align:center;
}
.img
{
	margin-top:20px;
	height:100px;
	width:100px;
}

.button1
{
	-webkit-transition-duration:0.4s;
	transition-duration:0.4s;
	padding: 10px 24px;
	border:2px #0000FF solid;
	margin-top:10px; 
	border-radius:10px;
	margin-left:10px;
	background:#00C;
	color:#CCC;
}
.button1:hover
{
	border:2px #F00 solid;
	background-color:#F00;
	color:white;
}
.button2
{
	-webkit-transition-duration:0.4s;
	transition-duration:0.4s;
	padding: 10px 24px;
	border:2px #FF3300 solid;
	margin-top:10px; 
	border-radius:10px;
	margin-left:10px;
	background:#F90;
	color:#CCC;
}
.button2:hover
{
	border:2px #000099 solid;
	background-color:#009;
	color:white;
}


</style>
</head>

<body>
<div class="col-lg-4 col1">
<center><img src="pers.png" class="img img-responsive"/></center>
<h2 class="h2">Personal Banking</h2>        
<a href="perslogin.php" class="a"><button class="button1" type="submit" style="margin-left:50px;">Login</button></a>
<a href="signup.php" class="a"><button class="button1" type="submit" style="margin-left:20px;">New User Registeration</button></a>

</div>
<div class="col-lg-4 col2">
<center><img src="corp.png" class="img img-responsive"/></center>
<h2 class="h2">Corporate Banking</h2>
<a href="blogin.php" class="a"><button class="button2" type="submit" style="margin-left:50px;">Branch Login</button></a>
</a>
<a href="adminsignup.php" class="a"><button class="button2" type="submit" style="margin-left:20px;">Admin Signup</button></a>
</a>

</div>

<br/>


<br/>
<br/>
