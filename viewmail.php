<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css" />
<?php
include"phome.php";
include"connect.php";

  $res1=mysqli_query($con,"select * from acknowledgement where ac_accno=(select a_no from account where username='$_SESSION[my]')")or die(mysqli_error());
  if(isset($_GET['id']))
  {
	  $id=$_GET['id'];
	  
	  $res=mysqli_query($con,"select * from acknowledgement where ac_id=$id");
	 
  }
?>
<div class="container container-fluid">
	<div class="panel panel-default panel-info">
     	<div class="panel-heading text-center text-nowrap">
        <h2>View Mail</h2>
        </div>
        <div class="panel-body">
        <div class="form-control-static container-fluid">
        	
            	<?php while($row=mysqli_fetch_array($res)){?>
                <div class="form-horizontal"><span class="glyphicon glyphicon-user"></span>
                    <label>From:</label>
                    <input type="text" name="subject"class="form-control" value="alerts@bank.com" readonly/>
                 </div>
                <br/>

                <div class="form-horizontal"><span class="glyphicon glyphicon-user"></span>
                    <label>Subject:</label>
                    <input type="text" name="subject" readonly class="form-control" value="<?php echo $row[2]; ?>"/>
                 </div>
                <br/>
                <div class="form-horizontal"><span class="glyphicon glyphicon-user"></span>
                    <label>Body:</label>
                    
                 <textarea name="text" class="form-control" readonly><?php echo $row[3]; ?></textarea> 	
                 </div>
                <br/>
                <?php }?> 
                
             