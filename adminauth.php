<?php include"bheader.php";?>
<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css" />
<?php
include"connect.php";

	
  $res= mysqli_query($con,"select * from admin where a_status='P'")or die(mysqli_error());
?>



<table class="table table-bordered table-bordered table-hover">
 <tr>
 
   <th>Admin User ID</th><th>Admin Name</th><th>Admin Branch </th><th>Operations </th>
 </tr>
  
  <?php while($row=mysqli_fetch_array($res)){?>
  
     <tr>
     <td><?php echo $row[0];?></td>
     <td><?php echo $row[2];?></td>
     <td><?php echo $row[3];?></td>
      <td><button type="button" class="btn btn-success"><a href="adminstatus.php?id=<?php echo $row[0];?>&b=accept" style="color:#FFF;">Aceept</a></button><button type="button" class="btn btn-danger"><a href="adminstatus.php?id=<?php echo $row[0];?>&b=reject" style="color:#FFF;">Reject</a></button></td>
     
     
     </tr>
  
  
  
  <?php }?>
</table>
</body>
</html>