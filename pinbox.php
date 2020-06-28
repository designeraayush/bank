
<?php

include"connect.php";
  
  $rs= mysqli_query($con,"select a_no from account where username='$_SESSION[my]'")or die(mysqli_error());
   while($row=mysqli_fetch_array($rs)){
	  
	  $acc=$row[0];
	  
  }
  $res= mysqli_query($con,"select * from acknowledgement where ac_accno=$acc")or die(mysqli_error($con));
  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css"/>
<title>Untitled Document</title>
<style>
.h1
{
	text-align:left;
	color:#009;
	font-family:"Comic Sans MS", cursive;
	font-size:24px;
	
}

.sub
{
	border-color:#F00;
}
.con
{
	border-color:#090;
}
.a
{
	text-decoration:none;
}
.d div:hover
{
	background-color:#F00;
	
}
a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
	
}

a:hover, a:active {
    background-color: red;
	border-left:5px #000066 solid;
}
</style>

</head>



<body>
<legend><h3 style="font-family:'Comic Sans MS', cursive; margin-left:100px;">Welcome to your Inbox</h3></legend>
<div class="container " style="margin-top:50px;">
	
  		<?php while($row=mysqli_fetch_array($res)){?>
		<div class="form-group-lg ">
        
        <!--<input type="hidden" name="id" />-->
        <!--<legend class="d"><div class="form-control">--><a href="viewmail.php?id=<?php echo $row[0];?>" style="width:1200px; text-align:left;">Subject : <?php echo $row[2];?></a><!--</div></legend>-->
		
		</div>
        <br/>
		<?php }?>     
	
</div>
</body>
</html>