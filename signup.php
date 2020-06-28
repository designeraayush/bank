<?php include"header.php";?>

<div class="container-fluid" style="width:400px;height:400px;">
<h2 style="color:#C06;">Welcome to Personal Banking Signup</h2>
        	<form action="signupreg.php" class="form-control-static" method="post" enctype="multipart/form-data">
            	<div class="form-horizontal"><span class="glyphicon glyphicon-credit-card"></span>
                <label>Username:</label>
                <input type="text" name="user" required="required" class="form-control"
                 placeholder="Set Your Username" />
                </div>
                <br/>
                <div class="form-horizontal"><span class="glyphicon glyphicon-credit-card"></span>
                <label>Full Name:</label>
                <input type="text" name="name" required="required" class="form-control"
                 placeholder="Enter Your Name" />
                </div>
                <br/>
                <div class="form-horizontal"><span class="glyphicon glyphicon-credit-card"></span>			
                <label>Password:</label>
                <input type="password" name="pass" required="required" class="form-control"
                 placeholder="Enter Your Password" />
                </div><br/>
                <div class="form-horizontal"><span class="glyphicon glyphicon-credit-card"></span>			
                <label>Account Number:</label>
                <input type="number" name="account" required="required" class="form-control"
                 placeholder="Enter Your Account Number" />
                </div><br/>
                <?php
            if(isset($_GET['success']))
			{
				?>
                <div class="navbar alert alert-success">User Signed up Successfully..</div>
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
		  ?>                <br/>
                
                <button type="submit" class="form-control btn btn-xs btn-success"><span class="glyphicon glyphicon-registration-mark"></span> Register</button>
            </form>
			
        </div>

</body>
</html>