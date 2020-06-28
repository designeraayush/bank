<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css" />

</head>

<body>
<?php
 include"check.php";
 include"connect.php";
 
?>
<?php $res1= mysqli_query($con,"select * from account where username='$_SESSION[my]'")or die(mysqli_error());
	  $acc= mysqli_query($con,"select a_no from account where username='$_SESSION[my]'")or die(mysqli_error());
 while($row1=mysqli_fetch_array($res1)){ ?>

  
  

<div class="navbar navbar-default navbar-inverse">
 <div class="container">
  <div class="navbar-header" style="color:#39C">
  <h2>Welcome: <?php echo $_SESSION['my'];?> </h2>
  </div>
	<div class="collapse navbar-collapse navbar-right">
         <ul class="nav navbar-nav nav-pills">
            <li><a href="pershome.php" style="margin-right:10px; padding:10px; background:#39C; color:#FFF; border:#FFF; margin-top:10px; border-radius:10px;">Home</a></li>
             <li><a href="balance.php" style="margin-right:10px; padding:10px; background:#39C;color:#FFF; border:#F00; margin-top:10px;  border-radius:10px;">View Balance</a></li>
             <li><a href="transfer.php?account=<?php echo $row1[6];?>" style="margin-right:10px; padding:10px; background:#39C; color:#FFF;border:#F00; margin-top:10px; border-radius:10px;">Money Transfer</a></li>
             <li><a href="mini.php" style="margin-right:10px; padding:10px; background:#39C; border:#F00; color:#FFF;margin-top:10px; border-radius:10px;">Transactions</a></li>
            <li><a href="myacc.php" style="margin-right:10px; padding:10px; background:#39C; border:#F00; color:#FFF;margin-top:10px; border-radius:10px;">My Account</a></li>
            <li><a href="feedback.php?account=<?php echo $row1[6];?>" style="margin-right:10px; padding:10px; background:#39C; border:#F00; color:#FFF;margin-top:10px; border-radius:10px;">Feedback</a></li>
            <li><a href="logout.php"style="margin-right:10px; padding:10px; background:#39C; border:#F00; color:#FFF; margin-top:10px; border-radius:10px;" class="btn btn-success"><span class="glyphicon glyphicon-log-out"></span> SignOut</a></li>
           
         </ul>
       </div>
  </div>  
</div>
<?php }?>
<h4 align="right">Last logged in:<?php $res= mysqli_query($con,"select * from account where username='$_SESSION[my]'")or die(mysqli_error());
 while($row=mysqli_fetch_array($res)){ ?>
   <?php echo $row[10];?>
  
  <?php }?>

</h4>