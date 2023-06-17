<?php      
    include_Once('./dbcon.php');

    if(isset($_POST['submit'])){ 
     	$stuemail = $_POST['stemail'];  
    	$stupassword = $_POST['stpassword'];  
      
        $stuemail = stripcslashes($stuemail);  
        $stupassword = stripcslashes($stupassword);  
        $stuemail = mysqli_real_escape_string($con, $stuemail);  
        $stupassword = mysqli_real_escape_string($con,$stupassword);  
      
        $sql = "select *from tblstudent where Email = '$stuemail' and Password = '$stupassword'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 

        $expires_at = new DateTime($row['ExpireDate']);
		$today      = new DateTime('now');


		if($count == 1){
			if($expires_at < $today)
			{
				?>
					<script type="text/javascript">
						alert("Your account expired, please renew here. ");
						window.location.href = "renewpayment.php";
					</script>
				<?php
		   
			}
			else
			{
				
				if ( $row['ExpireDate'] < date('Y-m-d', strtotime($Date_e. ' + 7 days')))
		        {
		            if ($row['ExpireDate'] > '0000-00-00')
		            {
		                ?>
							<script type="text/javascript">
								
								if (confirm("Your Membership expired Within Few Days.!Press OK to Renew NOW")) {
								   window.location.href = "renewpayment.php";
								} else {
								  window.location.href = "calindexstu.php"; 
								}
							</script>
						<?php
		            }
		        }
				else{
					echo '<script>alert("Login Successful !")</script>';
	            	header('Location: calindexstu.php'); 
				}   
        	}
        }  
        else{  
            echo '<script>alert("Login Faild !")</script>';  
        }
		
         
  	}    
?> 
<!DOCTYPE HTML>
<html>
<head>
<title> Gym Website Login</title>

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
		 <div class="h_menu4"><!-- start h_menu4 -->
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
          <div class="login_top">
          	<div class="container">
			  
				<div class="col-md-8">
				 <div class="login-page">
				  <div class="login-title">
	           		<h4 class="title">STUDENT LOGIN</h4>
					<div id="loginbox" class="loginbox">
						<form action="" method="post" name="login" id="login-form">
						  <fieldset class="input">
						    <p id="login-form-username">
						      <label for="modlgn_username"><b>Email</b></label>
						      <input id="modlgn_username" type="text" name="stemail" class="inputbox" size="18" autocomplete="off"  value="">
						    </p>
						    <p id="login-form-password">
						      <label for="modlgn_passwd"><b>Password</b></label>
						      <input id="modlgn_passwd" type="password" name="stpassword" class="inputbox" size="18" autocomplete="off" value="">
						    </p>
						    <div class="remember">
							    <input type="submit" name="submit" class="button" value="Login"><div class="clear"></div>
							 </div>
						  </fieldset>
						 </form>
					</div>
			      </div>
				</div>
				<div class="clear"></div>
			  </div>
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