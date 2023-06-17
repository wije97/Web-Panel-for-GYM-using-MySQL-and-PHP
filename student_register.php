

<?php
	include_Once('./dbcon.php');
	$errpw = "";
	


if(isset($_POST['submit'])){

	//student details
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$sex = $_POST['sex'];
	$nic = $_POST['nicS'];
	$stId = $_POST['stuid'];
	$regDate = $_POST['reDate'];
	$reMark = $_POST['remark'];
	$mArt = $_POST['mart'];
	$password = $_POST['psw'];
	$Cpassword = $_POST['cmpsw'];
	$package = $_POST['package'];
	$exDate = $_POST['exDate'];
	$errpw = "";
	
	//payment details
	$price= $_POST['price'];
	$paymentM= $_POST['payMethod'];
	$cardNum= $_POST['crdnum'];
	$cvv= $_POST['cvv'];
	$cardExdate= $_POST['crdexdate'];
	$cardHolder= $_POST['crdholdername'];


	if($password != $Cpassword){
		$errpw = "Password Not Matched !";
	}
	else{
		

		$insert1="INSERT INTO `tblstudent` (NIC,First_Name,Last_Name,Email,Age,Gender,Student_Id,Registration_date,ExpireDate,Remark,martial_art,Password,Package) VALUES ('$nic','$fname','$lname','$email','$age','$sex','$stId','$regDate','$exDate','$reMark','$mArt','$password','$package')";

		$query = mysqli_query($con, $insert1) or die(mysqli_error($con));
		if($query == 1){
			$insert2="INSERT INTO `tblpayment` (Price,Payment_Method,Card_Number,Expire_date,Holder_Name,Cvv,NIC) VALUES ('$price','$paymentM','$cardNum','$cardExdate','$cardHolder','$cvv',$nic)";
			$query2 = mysqli_query($con, $insert2) or die(mysqli_error($con));
			if ($query2 == 1) {
				echo '<script>alert("Registration Successful !")</script>';
			}

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
											<span>First Name<label>*</label></span>
											<input type="text" name="fname" required="" > 
										</div>
										<div>
											<span>Last Name<label>*</label></span>
											<input type="text" name="lname" required="" > 
										</div>
										<div>
										
											<span>Email Address<label>*</label></span>
											<input type="text" name="email" required=""> 
										</div>
										
										<div>
										
											<span>Age<label>*</label></span>
											<input type="text" name="age" required="" > 
	
										</div>
										<div>
										
											<span>Gender<label>*</label></span>
											<input type="text" name="sex" required="" > 
	
										</div>
										<div>
										
											<span>NIC<label>*</label></span>
											<input type="text" name="nicS" required="" > V
	
										</div>
										<div>
										
											<span>Student ID (ST-XXXX)<label>*</label></span>
											<input type="text" name="stuid" required="" > 
	
										</div>
										<div>
										
											<span>Registration date<label>*</label></span> 
												  <div class="md-form">
													<input type="date" id="reDate" name="reDate" class="form-control" onchange="updateInput(value)" required="">
												  </div>
										</div>
										<div>
											<span>Remark<label>*</label></span>
											<input type="text" name="remark" required="" > 
										</div>
										<div>
										
											<span>End Date<label>*</label></span> 
												  <div class="md-form">
													<input type="date" id="exDate" name="exDate" class="form-control" readonly="">
												  </div>
										</div>
										<div class="register-bottom-grid">
										<div>
											<span>Martial Arts <label>*</label></span>
											<select class="form-control" id="mart" name="mart" required="">
												<option value="Boxing">Boxing</option>
												<option value="Muay_Thai">Muay Thai</option>
												<option value="Kraw_maga">Kraw maga</option>
												<option value="Bjj">BJJ</option>
											</select>			
										</div>										
										<div class="clear"> </div>
								</div>
										<div class="clear"> </div>											
								</div>
								<div class="clear"> </div>
								<div class="register-bottom-grid">
										<h3>LOGIN INFORMATION</h3>
										<div class="col-sm-8">
											<span>Password<label>*</label></span>
											<input type="password" name="psw" required="" class="form-control">
											<SPAN><?php echo $errpw; ?></SPAN>
										</div>
										<div class="col-sm-8">
											<span>Confirm Password<label>*</label></span>
											<input type="password" name="cmpsw" required="" class="form-control">
											<SPAN><?php echo $errpw; ?></SPAN>
										</div>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<div class="register-bottom-grid">
										<h3>Payment</h3>
										<div>
											<span>Package name <label>*</label></span>
											<select class="form-control" id="package" name="package" onchange="enroolprice(this);" required="">
												<option value="MTI">MTI</option>
												<option value="MTU">MTU</option>
												<option value="MTI*4">MTI*4</option>
												<option value="MTU*3">MTU*3</option>
											</select>
											
											<script type="text/javascript">
												function enroolprice(){
													if(document.getElementById("package").value=="MTI")
													{
														document.getElementById("price").value="100"
													}
													if(document.getElementById("package").value=="MTU")
													{
														document.getElementById("price").value="177"
													}
													if(document.getElementById("package").value=="MTI*4")
													{
														document.getElementById("price").value="400"
													}
													if(document.getElementById("package").value=="MTU*3")
													{
														document.getElementById("price").value="531"
													}
												
												}

											</script>
										</div>
										<div class="clear"> </div>
								</div>								
								<div class="clear"> </div>
								<div class="register-bottom-grid">
										
										<div>
											<span>Price($)<label>*</label></span>
											<input type="text" name="price" id="price">
										</div>
										<div>
											<span>Payment method<label>*</label></span>
											<select class="form-control" id="payMethod" name="payMethod" required="">
												<option value="creditCrd">Credit card</option>
												<option value="debitCrd">Debit card</option>
											</select>
										</div>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<div class="register-bottom-grid">
										
										<div>
											<span>Card number<label>*</label></span>
											<input type="text" name="crdnum" required="">
										</div>
										<div>
											<span>CVV<label>*</label></span>
											<input type="text" name="cvv" required="">
										</div>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								
								<div class="register-bottom-grid">
										
										<div>
											<span>Expire date<label>*</label></span>
											<input type="text" name="crdexdate" required="">
										</div>
										<div>
											<span>Holder name<label>*</label></span>
											<input type="text" name="crdholdername" required="">
										</div>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								 <button type="submit" class="btn btn-primary mb-3" name="submit">SUBMIT</button>
						</form>
					</div>
				</div>
         </div>

         <script type="text/javascript">
         	
         	function updateInput(date) {  

         		var d = new Date(date);
			    var year = d.getFullYear();
			    var month = d.getMonth();
			    var day = d.getDate();
			    var c = new Date((year + 1),month, day);
			    
			    var da = new Date(c).toISOString().slice(0,10);
			    exDate.value = da; 

			}    

         </script>
         
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