<?php include"chead.php";?>
<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css" />
<?php
include"connect.php";

	
  $res= mysqli_query($con,"select * from transaction where t_status='P'")or die(mysqli_error());
?>



<table class="table table-bordered table-bordered table-hover">
 <tr>
 
   <th>Transaction ID</th><th>Account No.</th><th>Payee Account No.</th><th>Details </th><th>Amount </th><th>Type </th><th>Date </th><th>Operations </th>
 </tr>
  
  <?php while($row=mysqli_fetch_array($res)){?>
  
     <tr>
     <td><?php echo $row[0];?></td>
     <td><?php echo $row[1];?></td>
     <td><?php echo $row[2];?></td>
     <td><?php echo $row[3];?></td>
     <td><?php echo $row[4];?></td>
     <td><?php echo $row[5];?></td>
     <td><?php echo $row[6];?></td>
      <td><button type="button" class="btn btn-success"><a href="transferreg.php?id=<?php echo $row[0];?>&b=process&acc=<?php echo $row[2];?>&amt=<?php echo $row[4];?>&det=<?php echo $row[3];?>" style="color:#FFF;">Process</a></button><button type="button" class="btn btn-danger"><a href="adminstatus.php?id=<?php echo $row[0];?>&b=reject" style="color:#FFF;">Reject</a></button></td>
     
     
     </tr>
  
  
  
  <?php }?>
</table>
</body>
</html>