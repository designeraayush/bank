<?php 
include"phome.php";
include"connect.php";
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="container container-fluid">
	<div class="panel panel-default panel-info">
     	<div class="panel-heading text-center text-nowrap">
        <h2>Enter Transfer Information</h2>
        </div>
        <div class="panel-body">
         <?php
            if(isset($_GET['success']))
			{
				?>
                <div class="navbar alert alert-success">Amount will be transferred shortly......</div>
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
        <div class="form-control-static container-fluid">
        	<form action="transferreg.php" method="post" enctype="multipart/form-data">
            	<div class="form-horizontal"><span class="glyphicon glyphicon-credit-card"></span>
                <label>Your Account Number:</label>
                <input type="number" name="my" value="<?php $acc=$_REQUEST['account']; echo $acc; ?>" class="form-control" readonly="readonly" /><br/>
            	<div class="form-horizontal"><span class="glyphicon glyphicon-credit-card"></span>
                <label>Payee Account Number:</label>
                <input type="number" name="payee" required="required" class="form-control"
                 placeholder="Enter Account Number" />
                </div>
                <br/>
                
                <div class="form-horizontal"><span class="glyphicon glyphicon-user"></span>
                    <label>Details of Transaction:</label>
                    <input type="text" name="details" required="required"autocomplete="off" class="form-control" placeholder="Enter Transaction Details"/>
                 </div>
                <br/>
                <div class="form-horizontal"><span class="glyphicon glyphicon-user"></span>
                    <label>Transfer Amount:</label>
                    <input type="number" name="amount" required="required"autocomplete="off" class="form-control" placeholder="Enter Amount"/>
                 </div>
                <br/>
                
                
                <button type="submit" class="form-control btn btn-xs btn-success"><span class="glyphicon glyphicon-envelope"></span> Submit</button>
                </form>

</body>
</html>