<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css" />
<?php
include"chead.php";
include"connect.php";
  $res= mysqli_query($con,"select * from account")or die(mysqli_error());
?>



<table class="table table-bordered table-bordered table-hover">
 <tr>
 
   <th>Operations</th><th>Account Number</th><th>Name</th><th>Mobile No</th>
 </tr>
  
  <?php while($row=mysqli_fetch_array($res)){?>
  
     <tr>
     <td><button type="button" class="btn btn-danger"><a href="mail.php?account=<?php echo $row[6];?>" style="color:#FFF;">Mail</a></button></td>
     <td><?php echo $row[6];?></td>
     <td><?php echo $row[0];?></td>
     <td><?php echo $row[5];?></td>
     
     
     
     </tr>
  
  
  
  <?php }?>
</table>
</body>
</html>