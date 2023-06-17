
<?php
include_Once('./dbcon.php');

?>


<!DOCTYPE HTML>
<html>
<head>
<title>Booked Sessions</title>

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
			   <li class="active"><a href="calindexstu.php">Dashboard</a></li>			
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

          		<h4 class="title">Enter Your NIC</h4>
					<div id="loginbox" class="loginbox">
						<form action="" method="post" name="search" id="login-form">
						  <fieldset class="input">
						    <p id="searcht">
						      <label for="NIC"><b>NIC</b></label>
						      <input id="nic" type="text" name="nic" class="inputbox" size="18" autocomplete="off" >
						    </p>
						    
						    <input type="submit" name="submit" class="button" value="Search">
						    
						  </fieldset>
						</form>
					</div>			
				<div class="clear"></div>

          		<?php 

					echo '<h2 align="center">Your Sessions</h2>';
					echo '<div class="container">           
						  <table class="table table-striped" align="center">
						    <thead>
						      <tr>
						        <th>Booking ID</th>
						        <th>Title</th>
						        <th>Teacher</th>
						        <th>Branch</th>
						        <th>Start</th>
						        <th>End</th>
						      </tr>
						    </thead>
						    <tbody>'
					      ;
					      if(isset($_POST['submit'])){
					      	$Tnic = $_POST['nic'];
							$query = "SELECT tblbooking.BookingID, events.Title, events.Teacher, events.Branch, events.Start, events.End   FROM tblbooking, events WHERE tblbooking.SessionID=events.ID AND tblbooking.NIC=$Tnic";

							if ($result = mysqli_query($con,$query)) {
							    while ($row = $result->fetch_assoc()) {
							        $BID = $row["BookingID"];
							        $title = $row["Title"];
							        $teacher = $row["Teacher"];
							        $branch = $row["Branch"];
							        $start = $row["Start"]; 
							        $end = $row["End"];

					        		echo '<tr> 
					                <td>'.$BID.'</td> 
					                <td>'.$title.'</td> 
					                <td>'.$teacher.'</td> 
					                <td>'.$branch.'</td> 
					                <td>'.$start.'</td>
					                <td>'.$end.'</td>
					              </tr>';
					    }
					    $result->free();
					}
					
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