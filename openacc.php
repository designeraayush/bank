<?php

include"chead.php";
include"connect.php";
?>
<link href="bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet"/>
<div class="container container-fluid">
	<div class="panel panel-default panel-info">
     	<div class="panel-heading text-center text-nowrap">
        <h2>Enter Personal Information</h2>
        </div>
        <div class="panel-body">
         <?php
            if(isset($_GET['success']))
			{
				?>
                <div class="navbar alert alert-success">Account Opened Successfully..</div>
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
        	<form action="openreg.php" method="post" enctype="multipart/form-data">
            	<div class="form-horizontal"><span class="glyphicon glyphicon-credit-card"></span>
                <label>Full Name:</label>
                <input type="text" name="name" required="required" class="form-control"
                 placeholder="Enter First Name" />
                </div>
                <br/>
                <br/>
                <div class="form-horizontal"><span class="glyphicon glyphicon-time"></span>
                    <label>Date Of Birth:</label>
                    <input type="date" name="dob" required="required"autocomplete="off" class="form-control"/>
                 </div>
                <br/>
                <div class="form-horizontal"><span class="glyphicon glyphicon-star"></span>
                    <label>Father's Name:</label>
                    <input type="text" name="father" required="required"autocomplete="off" class="form-control" placeholder="Enter Father's Name"/>
                 </div>
                <br/>
                <div class="form-horizontal"><span class="glyphicon glyphicon-star"></span>
                    <label>Mothers's Name:</label>
                    <input type="text" name="mother" required="required"autocomplete="off" class="form-control" placeholder="Enter Mother's Name"/>
                 </div>
                <br/>
                
                <div class="form-horizontal"><span class="glyphicon glyphicon-user"></span>
                    <label>Aadhar Number:</label>
                    <input type="number" name="aadhar" required="required"autocomplete="off" class="form-control" placeholder="Enter Aadhar No."/>
                 </div>
                <br/>
                
                
                <div class="form-horizontal"><span class="glyphicon glyphicon-inbox"></span>
                    <label>Mobile Number:</label>
                    <input type="number" name="number" required="required"autocomplete="off" class="form-control" placeholder="Enter Mobile No."/>
                 </div>
                <br/>
                <button type="submit" class="form-control btn btn-xs btn-success"><span class="glyphicon glyphicon-envelope"></span> Submit</button>
                </form>
</body>
</html>