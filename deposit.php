<?php

include"chead.php";
include"connect.php";
?>
<link href="bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet">
<div class="container container-fluid">
	<div class="panel panel-default panel-info">
     	<div class="panel-heading text-center text-nowrap">
        <h2>Enter Deposit Information</h2>
        </div>
        <div class="panel-body">
         <?php
            if(isset($_GET['success']))
			{
				?>
                <div class="navbar alert alert-success">Amount Deposited Successfully..</div>
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
        	<form action="depreg.php" method="post" enctype="multipart/form-data">
            	<div class="form-horizontal"><span class="glyphicon glyphicon-credit-card"></span>
                <label>Account Number:</label>
                <input type="number" name="account" required="required" class="form-control"
                 placeholder="Enter Account Number" />
                </div>
                <br/>
                <br/>
                
                <div class="form-horizontal"><span class="glyphicon glyphicon-user"></span>
                    <label>Details of Transaction:</label>
                    <input type="text" name="details" required="required"autocomplete="off" class="form-control" placeholder="Enter Transaction Details"/>
                 </div>
                <br/>
                <div class="form-horizontal"><span class="glyphicon glyphicon-user"></span>
                    <label>Deposit Amount:</label>
                    <input type="number" name="amount" required="required"autocomplete="off" class="form-control" placeholder="Enter Amount"/>
                 </div>
                <br/>
                
                
                <button type="submit" class="form-control btn btn-xs btn-success"><span class="glyphicon glyphicon-envelope"></span> Submit</button>
                </form>
</body>
</html>