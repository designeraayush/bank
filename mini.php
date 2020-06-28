<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css" />
<?php
include"phome.php";
include"connect.php";

  $res1=mysqli_query($con,"select * from transaction where t_acno=(select a_no from account where username='$_SESSION[my]')")or die(mysqli_error());
?>



<table class="table table-bordered table-bordered table-hover table-striped">
 <tr>
 
   <th bgcolor="#6666CC">Account Number</th><th bgcolor="#0099CC">Details</th><th bgcolor="#FF0000">Transaction Type</th><th bgcolor="#009933">Amount</th>
 </tr>
  
  <?php while($row=mysqli_fetch_array($res1)){?>
  
     <tr style="border-color:#000">
     <td><?php echo $row[1];?></td>
     <td><?php echo $row[3];?></td>
     <td><?php echo $row[5];?></td>
     <td><?php echo $row[4];?></td>
     
     
     </tr>
  
  
  
  <?php }?>
</table>
</body>
</html>