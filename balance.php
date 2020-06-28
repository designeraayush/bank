<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css" />
<?php
include"phome.php";
include"connect.php";
//include"check.php";
	
  $res= mysqli_query($con,"select * from account where username='$_SESSION[my]'")or die(mysqli_error());
?>



<table class="table table-bordered table-bordered table-hover">
 <tr>
 
   <th>Name</th><th>Account Number</th><th>Balance Available</th>
 </tr>
  
  <?php while($row=mysqli_fetch_array($res)){?>
  
     <tr>
     <td><?php echo $row[0];?></td>
     <td><?php echo $row[6];?></td>
     <td><?php echo $row[7];?></td>
     
     
     
     </tr>
  
  
  
  <?php }?>
</table>
</body>
</html>