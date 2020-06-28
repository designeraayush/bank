<?php
include"header.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css" />
<title>Personal Login</title>
<style>
.info
{
	margin-left:10px;
	position:absolute;
	width:400px;
	height:410px;
	border-top:#6FF groove;
	border-bottom:#6ff groove;
}
.h3
{
	color:#03C;
	background:#999;
	padding:10px;
}
.b
{
	color:#F00;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:18px;
}
.ol
{
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:16px;
}
.divi1
{
	margin-left:25px;
	background:#093;
	height:125px; 
	width:250px;
	margin-right:25px;
}
.divi2
{
	margin-left:60px;
	background:#F00;
	height:125px; 
	width:250px;
}
.ph
{
	margin-top:5px;
	background:#FFF;
	color:#393;
	padding:8px;
}
.ph1
{
	margin-top:5px;
	background:#FFF;
	color:#F00;
	padding:8px;
}
.pb
{
	color:#FFF;
}
</style>
</head>

<body>
<div class="info">
<h3 class="h3"> For Your Own Security</h3>

<p class="b">Please ensure the following before logging into Banking Solutions :</p>
<ol class="ol">
<li>The URL in your browser address bar begins with "https".</li>
<li>The address or status bar displays the padlock symbol.</li>
<li>Click the padlock to view and verify the security certificate.</li>
<li>The address bar turns green indicating that the site is secured with an SSL Certificate that meets the Extended Validation Standard.</li>
<li>(SSL is compatible for IE 7.0 and above, Mozilla Firefox 3.1 and above, Opera 9.5 and above, Safari 3.5 and above, Google Chrome).</li>
</ol>
</div>
<div class="container-fluid" style="width:400px;height:400px;">
<h2 style="color:#C06;">Welcome to Personal Login</h2>

        	<form action="plogin.php" class="form-control-static" method="post" enctype="multipart/form-data">
            	<div class="form-horizontal"><span class="glyphicon glyphicon-credit-card"></span>
                <label>Username:</label>
                <input type="text" name="user" required="required" class="form-control"
                 placeholder="Enter Your Username" />
                </div>
                <br/>
                <div class="form-horizontal"><span class="glyphicon glyphicon-credit-card"></span>			
                <label>Password:</label>
                <input type="password" name="pass" required="required" class="form-control"
                 placeholder="Enter Your Password" />
                </div>
                <?php if(isset($_GET['err'])){?>
                    <div class="form-horizontal">
                      <div class="navbar alert-danger">
                          <?php echo $_GET['err'];?>
                      </div>
                    </div>
                <?php }?>
                <br/>
                
                <button type="submit" class="form-control btn btn-xs btn-success"><span class="glyphicon glyphicon-log-in"></span> Login</button>
            </form>
			<a href="signup.php" style="text-decoration:none; color:#C06;">New User ? Register Here</a><br/>
            <a href="signup.php" style="text-decoration:none; color:#C06;">Forgot Login Password</a><br/>
            <a href="signup.php" style="text-decoration:none; color:#C06;">Forgot Username</a>
            </div> 
            <br/>
<div class="container-fluid" style="background:#CCC;">            
<div class="col-sm-3 divi1">
<center> <p class="ph"><b>Always</b></p><hr/>
<p class="pb">Keep your computer 
free of malware.</p>
</center>
</div>
<div class="col-sm-3 divi1">
<center> <p class="ph"><b>Always</b></p><hr/>
<p class="pb">Change your passwords 
periodically.</p>
</center>
</div>
<div class="col-sm-3 divi2">
<center> <p class="ph1"><b>Never</b></p><hr/>
<p class="pb">Respond to any communication 
seeking your passwords.</p>
</div>
<div class="divi2 col-sm-3">
<center> <p class="ph1"><B>Never</B></p><hr/>
<p class="pb">Reveal your passwords or 
card details to anyone.</p>
</div>
</div>
<br/><br/>

</body>
</html>
