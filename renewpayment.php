<?php
	include_Once('./dbcon.php');
	

if(isset($_POST['submit'])){

	//payment details
	$price= $_POST['price'];
	$paymentM= $_POST['payMethod'];
	$cardNum= $_POST['crdnum'];
	$cvv= $_POST['cvv'];
	$cardExdate= $_POST['crdexdate'];
	$cardHolder= $_POST['crdholdername'];
	$exDate = $_POST['exDate'];
	$nic = $_POST['nicS'];


			$update1="UPDATE `tblstudent` SET ExpireDate = '$exDate' WHERE NIC = $nic";
			$query1 = mysqli_query($con, $update1) or die(mysqli_error($con));
			
			if ($query1 == 1) {
				$insert1="INSERT INTO `tblpayment` (Price,Payment_Method,Card_Number,Expire_date,Holder_Name,Cvv,NIC) VALUES ('$price','$paymentM','$cardNum','$cardExdate','$cardHolder','$cvv','$nic')";
				$query2 = mysqli_query($con, $insert1) or die(mysqli_error($con));

				?>

				<script type="text/javascript">
								
								if (confirm("Your Membership renewed...! Thank ou for your Payment")) {
								   window.location.href = "calindexstu.php";
								} else {
								  window.location.href = "calindexstu.php"; //STUDENT LOGIN URL
								}
				</script>

				<?php
			}
			else{
			echo '<script>alert("Unsuccessful Renew !")</script>';
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
								<div class="clear"> </div>
								<div class="register-bottom-grid">
										<h3>Payment</h3>
										<div>
										
											<span>NIC<label>*</label></span>
											<input type="text" name="nicS" required="" > V
	
										</div>
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
										
											<span>Renew For<label>*</label></span> 
												  <div class="md-form">
													<input type="date" id="exDate" name="exDate" class="form-control" >
												  </div>
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