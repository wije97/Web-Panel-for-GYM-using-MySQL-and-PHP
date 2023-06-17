
<?php
include_Once('./dbcon.php');

?>


<!DOCTYPE HTML>
<html>
<head>
<title>Report</title>

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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

          		<?php 
					$query = "SELECT * FROM tblfeedback";
					echo '<h2 align="center">Feedback Report</h2>';
					echo '<div class="container">           
						  <table class="table table-striped" align="center">
						    <thead>
						      <tr>
						        <th>Number</th>
						        <th>Name</th>
						        <th>Email</th>
						        <th>Subject</th>
						        <th>Message</th>
						      </tr>
						    </thead>
						    <tbody>'
					      ;

							if ($result = mysqli_query($con,$query)) {
							    while ($row = $result->fetch_assoc()) {
							        $id = $row["id"];
							        $Name = $row["Name"];
							        $email = $row["Email"];
							        $subject = $row["Subject"];
							        $message = $row["Message"];

					        		echo '<tr> 
					                <td>'.$id.'</td> 
					                <td>'.$Name.'</td> 
					                <td>'.$email.'</td> 
					                <td>'.$subject.'</td> 
					                <td>'.$message.'</td>
					              </tr>';
					    }
					    $result->free();
					}
					echo '</tbody>';
					echo '</table>';
					echo '</div>' ; 
					?>
						

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