<?php
	include_Once('./dbcon.php');
	$errpw = "";

if(isset($_POST['submit'])){

	
	$name = $_POST['adname'];
	$email = $_POST['ademail'];
	$adminid = $_POST['adminid'];
	$password = $_POST['pw'];
	$Cpassword = $_POST['cpw'];

	if($password != $Cpassword){
		$errpw = "Password Not Matched !";
	}
	else{

		$insert1="INSERT INTO tbladmin (adminId,name,email,password) VALUES ('$adminid','$name','$email','$password')";

		$query = mysqli_query($con, $insert1) or die(mysqli_error($con));
		if($query == 1){
			echo '<script>alert("Registration Successful !")</script>';
		}
		else{
			echo '<script>alert("Registration Unsuccessful !")</script>';
		}

        mysqli_close($con);

	}

}



?>

<!DOCTYPE HTML>
<html>
<head>
<title>Register</title>

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<link href="css/style.css" rel='stylesheet' type='text/css' />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
</head>
<body>
  

    <div class="menu">
	  <div class="container">
		 <div class="logo">
		 <a href="index.html"><img src="images/logo.png" alt=""/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>
			
		 </div>
		 
		 <div>
		 <H4> FIGHTER FITNESS </H4> 
		 </div>
		 <div class="h_menu4">
		   <a class="toggleMenu" href="#">Menu</a>
			 <ul class="nav">
			   <li class="active"><a href="index.php">Home</a></li>			
			   <li><a href="contact.php">Contact</a></li>
			 </ul>
			  <script type="text/javascript" src="js/nav.js"></script>
		  </div>
		 <div class="clear"></div>
	  </div>
	</div>
	
	
        <div class="main">
          <div class="register-grids">
          	<div class="container">
						<form action="" method="POST"> 
								<div class="register-top-grid">
										<h3>PERSONAL INFORMATION</h3>
										<div>
											<span>Name<label>*</label></span>
											<input type="text" name="adname" required=""> 
										</div>										
										<div>
										
											<span>Email Address<label>*</label></span>
											<input type="text" name="ademail" required=""> 
										</div>																				
										<div>
										
											<span>Admin ID<label>*(AD-xxxx)</label></span>
											<input type="text" name="adminid" required="" > 
	
										</div>

										<div class="clear"> </div>
										
								</div>
								<div class="clear"> </div>
								<div class="register-bottom-grid">
										<h3>LOGIN INFORMATION</h3>
										<div class="col-sm-8">
											<span>Password<label>*</label></span>
											<input type="password" name="pw" required="" class="form-control">
										</div>
										<div class="col-sm-8">
											<span>Confirm Password<label>*</label></span>
											<input type="password" name="cpw" required="" class="form-control">
										</div>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<input type="submit" value="submit" name="submit">
						</form>
					</div>
				</div>
         </div>
         
         <div class="footer-bottom">
		   <div class="container">
		 	 <div class="row section group">
				
				<div class="col-md-6">
					<div class="f-logo">
						<H2>FIGHTER FITNESS</H2>
					</div>
					<p class="m_9">Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text</p>
					<p class="address">Phone : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">[+65] 6684 3055</span></p>
					<p class="address">Web : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">www.fighterfitness.sg</span></p>
				</div>
				
				<div class="clear"></div>
	  		  </div>
		 	</div>
		 </div>
</body>
</html>