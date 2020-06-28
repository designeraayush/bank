<?php include"bheader.php";?>
<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css" />
<?php
include"connect.php";

	
  $res= mysqli_query($con,"select * from feedback")or die(mysqli_error());
?>



<table class="table table-bordered table-bordered table-hover">
 <tr>
 
   <th>Account Number</th><th>Feedback date</th><th>Feedback </th>
 </tr>
  
  <?php while($row=mysqli_fetch_array($res)){?>
  
     <tr>
     <td><?php echo $row[0];?></td>
     <td><?php echo $row[1];?></td>
     <td><?php echo $row[2];?></td>
     
     
     
     </tr>
  
  
  
  <?php }?>
</table>
</body>
</html>