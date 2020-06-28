<?php
include"header.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css" />
<title>Branch Login</title>

</head>

<body>

<div class="container-fluid" style="width:400px;height:400px;">

<h2 style="color:#C06;">Welcome to Branch Login</h2>
        	<form action="brlogin.php" class="form-control-static" method="post" enctype="multipart/form-data">
            	<div class="form-horizontal"><span class="glyphicon glyphicon-credit-card"></span>
                <label>Username:</label>
                <input type="text" name="user" required="required" class="form-control"
                 placeholder="Enter Your Username" />
                </div>
                <br/>
                <div class="form-horizontal"><span class="glyphicon glyphicon-credit-card"></span>			
                <label>Password:</label>
                <input type="password" name="pass" required="required" class="form-control"
                 placeholder="Enter Your Password" id="password" /><br/>
                 <button type="button" id="eye" onclick=				"if(password.type=='text')password.type='password'; else password.type='text';">
    Show Password
</button>
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
        </div>


</body>
</html>
