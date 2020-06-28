<?php include"chead.php";?>
<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css" />
<?php
include"connect.php";

	
  $res= mysqli_query($con,"select * from user where u_status='P'")or die(mysqli_error());
?>



<table class="table table-bordered table-bordered table-hover">
 <tr>
 
   <th>User ID</th><th>User Name</th><th>User Account Number </th><th>Operations </th>
 </tr>
  
  <?php while($row=mysqli_fetch_array($res)){?>
  
     <tr>
     <td><?php echo $row[0];?></td>
     <td><?php echo $row[1];?></td>
     <td><?php echo $row[4];?></td>
      <td><button type="button" class="btn btn-success"><a href="userstatus.php?id=<?php echo $row[0];?>&b=accept" style="color:#FFF;">Aceept</a></button><button type="button" class="btn btn-danger"><a href="adminstatus.php?id=<?php echo $row[0];?>&b=reject" style="color:#FFF;">Reject</a></button></td>
     
     
     </tr>
  
  
  
  <?php }?>
</table>
</body>
</html>