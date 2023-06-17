
<?php
	include_Once('./dbcon.php');
if(isset($_POST['submit'])){

	
	$fname = $_POST['fullname'];
	$nic = $_POST['nic'];
	$techerid = $_POST['techerid'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$martialart = $_POST['mart'];
	$salary = $_POST['salary'];
		

		$insert1="INSERT INTO `tblteachers` (nic,name,teacherId,mobile,email,mart,Monthly_Salary) VALUES ('$nic','$fname','$techerid','$mobile','$email','$martialart','$salary')";

		$query = mysqli_query($con, $insert1) or die(mysqli_error($con));
		if($query == 1){
			echo '<script>alert("Registration Successful!")</script>';
			header('Location: admin_Dashboard.php'); 
		}
		else{
			echo '<script>alert("Registration Unsuccessful!")</script>';
		}

        mysqli_close($con);

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
			<a href="index.php"><H2>FIGHTER FITNESS</H2></a>
		 </div>
		 <div class="h_menu4">
		   <a class="toggleMenu" href="#">Menu</a>
			 <ul class="nav">
			   <li class="active"><a href="admin_Dashboard.php">Dashboard</a></li>			
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
										<h3>ADD TEACHERS INFORMATION</h3>
										<div>
											<span>Full Name<label>*</label></span>
											<input type="text" name="fullname" required=""> 
										</div>
										<div>
											<span>NIC<label>*</label></span>
											<input type="text" name="nic" required=""> 
										</div>
										<div>
										
											<span>Teacher ID<label>*(TE-XXXXX)</label></span>
											<input type="text" name="techerid" required=""> 
										</div>
										
										<div>
										
											<span>Phone number<label>*</label></span>
											<input type="text" name="mobile" required=""> 
	
										</div>
										<div>
										
											<span>Email<label>*</label></span>
											<input type="text" name="email" required="">  
	
										</div>
										<div>
										
											<span>Monthly Salary<label>*</label></span>
											<input type="text" name="salary" >  
	
										</div>
										<div>
											<span>Martial Arts <label>*</label></span>
											<select class="form-control" id="mart" name="mart" required="">
												<option value="Boxing">Boxing</option>
												<option value="Muay_Thai">Muay Thai</option>
												<option value="Kraw_maga">Kraw maga</option>
												<option value="Bjj">BJJ</option>
											</select>			
										</div>

								</div>
								<div class="clear"> </div>

								 <button type="submit" class="btn btn-primary mb-3" name="submit">SUBMIT</button>
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