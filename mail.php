<?php

include"chead.php";
include"connect.php";

if(isset($_GET['account']))
  {
	  $account=$_GET['account'];
	  
	  $res=mysqli_query($con,"select * from account where a_no=$account");
	  if($row=mysqli_fetch_array($res))
	  {
		  $account=$row[6];
	  }
  }
?>
<link href="bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet">
<div class="container container-fluid">
	<div class="panel panel-default panel-info">
     	<div class="panel-heading text-center text-nowrap">
        <h2>Enter Mail Information</h2>
        </div>
        <div class="panel-body">
         <?php
            if(isset($_GET['success']))
			{
				?>
                <div class="navbar alert alert-success">Mail Sent Successfully..</div>
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
        	<form action="mailreg.php" method="post" enctype="multipart/form-data">
            	<div class="form-horizontal"><span class="glyphicon glyphicon-credit-card"></span>
                <label>Account Number:</label>
                <input type="number" name="account" required="required" class="form-control"
                 placeholder="Enter Account Number" value="<?php echo $account;?>" />
                </div>
                <br/>
                <br/>
                
                <div class="form-horizontal"><span class="glyphicon glyphicon-user"></span>
                    <label>Subject:</label>
                    <input type="text" name="subject" required="required"autocomplete="off" class="form-control" placeholder="Enter Subject"/>
                 </div>
                <br/>
                <div class="form-horizontal"><span class="glyphicon glyphicon-user"></span>
                    <label>Body:</label>
                    
                 <textarea name="text" class="form-control" required placeholder="Enter your text"></textarea> 	
                 </div>
                <br/>
                
                
                <button type="submit" class="form-control btn btn-xs btn-success"><span class="glyphicon glyphicon-envelope"></span> Submit</button>
                </form>
</body>
</html>