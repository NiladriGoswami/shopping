<?php
$user='root';
$pass='';
$db='shopping';
$conn= new mysqli('localhost', $user, $pass, $db) or die("DANG!!...unable to connect!");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>cyber_shoppe::REGISTER::</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <form action="" method="post">
							
							
											 <?php
						if(isset($_POST['Submit']))
     {   
        
	    $v_name=$_POST['v_name'];
	    $v_email=$_POST['v_email'];
		$pass=$_POST['password'];
		$cpass=$_POST['c_password'];
		$phone=$_POST['phone'];
	if($_POST['Submit'] && $pass==$cpass)
	      {
	 $reg1="insert into vendor_master(vendor_name,vendor_email,password,is_active,phone) values('$v_name','$v_email','$pass',2,'$phone')";
			//echo $sql;
			 //exit;
			 $rec1=mysqli_query($conn,$reg1);
			  //echo $rec;
			  // exit;
			   if($rec1)
			   {
			       echo "<script>
				   alert('Successfully registered!!!..');
				   location.replace('login.php?');
				   </script>";
			   
			   }
		  }
			   else 
			   {
			   echo "<script>
				   alert('Registration unsuccessful!..Try again!!..');
				   location.replace('register.php?');
				   </script>";
			   }
		  
		  
	   }
?>
                                <fieldset>
                                    <div class="form-group">
									 <div class="form-group">
                                        <input class="form-control" placeholder="Vendor Name" name="v_name" type="text"  required=""/>
                                    </div>
                                        <input class="form-control" placeholder="Vendor E-mail" name="v_email" type="email"  required=""/>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password"  required="" />
                                    </div>
								 <div class="form-group">
                            <input class="form-control" placeholder="Confirm Password" name="c_password" type="password" required="" />
                                </div>
									 <div class="form-group">
                           <input class="form-control" placeholder="10-digit Mobile Number" name="phone" type="text" pattern="[6789][0-9]{9}"  required="" />
                                    </div>
                                    
                                    <!-- Change this to a button or input when using this as a form -->
									
									  <input type="submit" class="btn btn-outline btn-danger" name="Submit" value="Sign Up">
                                
                            </form>
							
							</fieldset>
                        </div>
						
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
