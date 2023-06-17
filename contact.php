
<?php
	include_Once('./dbcon.php');
	
	if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	

		$insert1="INSERT INTO `tblfeedback` (Name,Email,Subject,Message) VALUES ('$name','$email','$subject','$message')";
		$query = mysqli_query($con, $insert1) or die(mysqli_error($con));
        mysqli_close($con);

	}


?>

<!DOCTYPE HTML>
<html>
<head>
<title>Contact</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<link href="css/style.css" rel='stylesheet' type='text/css' />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>


<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

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
			   <li><a href="index.php">Home</a></li>
			   <li><a href="about.php">About</a></li>
			   <li class="active"><a href="contact.php">Contact</a></li>
			 </ul>
			  <script type="text/javascript" src="js/nav.js"></script>
		  </div>
		 <div class="clear"></div>
	  </div>
	</div>
	
	</br>
	</br>
    <div class="main">
       <div class="about_banner_wrap">
      	   
      	</div>
      	<div class="border"> </div>
      	<div class="rwo contact">
      	  <div class="container">
      		 <div class="col-md-8 contact-top">
			  <h3>Send us a message</h3>
			  <p class="contact_msg"></p>
			     <form method="post" action="">
					<div class="to">
                     	<input type="text" class="text" value="Name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
					 	<input type="text" class="text"  value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left:20px">
					 	<input type="text" class="text" value="Subject" name="subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" style="margin-left:20px">
					</div>
					<div class="text">
	                   <textarea value="" name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>
	                </div>
	                <div class="form-submit1">
			           <input name="submit" type="submit" id="submit" value="Submit Your Message"><br>
			           <p class="m_msg">Make sure you put a valid email</p>
					</div>
					<div class="clear"></div>
                 </form>
             </div>
             <div class="col-md-4 contact-top_right">
			  <h3>contact info</h3>
			  <p>Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text</p>
			  <ul class="contact_info">
			  	<li><i class="mobile"> </i><span>+94 77 2666 444</span></li>
			  	<li><i class="message"> </i><span class="msg">fighterfitness@gamail.com</span></li>
			  </ul>
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