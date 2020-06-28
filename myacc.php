<?php include"phome.php";
	include"connect.php"; 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css" />
<title>Untitled Document</title>
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

<div class="div1">
<h1><a href="profile.php" class="a">My Profile</a></h1>
</div>
<div class="div2">
<h1><a href="cpass.php" class="a">Change Password</a></h1>
</div>

</body>
</html>