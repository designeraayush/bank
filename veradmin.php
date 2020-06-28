<?php include"bheader.php";?>
<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css" />
<?php
include"connect.php";

	
  $res= mysqli_query($con,"select * from admin where a_status='A'")or die(mysqli_error());
?>



<table class="table table-bordered table-bordered table-hover">
 <tr>
 
   <th>Admin User ID</th><th>Admin Name</th><th>Admin Branch </th>
 </tr>
  
  <?php while($row=mysqli_fetch_array($res)){?>
  
     <tr>
     <td><?php echo $row[0];?></td>
     <td><?php echo $row[2];?></td>
     <td><?php echo $row[3];?></td>

     
     
     </tr>
  
  
  
  <?php }?>
</table>
</body>
</html>