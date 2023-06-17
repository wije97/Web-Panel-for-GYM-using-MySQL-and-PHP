<?php
require_once('bdd.php');


$sql = "SELECT id, title, start, end, color,branch,teacher,booking FROM events ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- calbootstrap Core CSS -->
    <link href="css/calbootstrap.min.css" rel="stylesheet">
	
	<!-- FullCalendar -->
	<link href='css/fullcalendar.css' rel='stylesheet' />

	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

	<link href="css/style.css" rel='stylesheet' type='text/css' />

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="js/jquery.min.js"></script>

	<!-- grid-slider -->
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<!-- //grid-slider -->


</head>

<body>

	<!-- start menu -->
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
			   <li><a href="index.php">Home</a></li>
			   <li><a href="about.php">About</a></li>
			   <li class="active"><a href="contact.php">Contact</a></li>
			 </ul>
			  <script type="text/javascript" src="js/nav.js"></script>
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
	<!-- end menu -->
	</br>
	</br>
	  

	 <div class="main">


		    <div class="container">

		        <div class="row">
		            <div class="col-lg-12 text-center">
		                <div id="calendar" class="col-centered">
		                </div>
		            </div>
					
		        </div>
		        

		    
			    <script src="js/caljquery.js"></script>

			    
			    <script src="js/calbootstrap.min.js"></script>
				
				
				<script src='js/moment.min.js'></script>
				<script src='js/fullcalendar.min.js'></script>
				
				<script>

				$(document).ready(function() {
					
					$('#calendar').fullCalendar({
						header: {
							left: 'prev,next today',
							center: 'title',
							right: 'month,basicWeek,basicDay'
						},
						defaultDate: '2021-01-01' ,
						editable: false,
						eventLimit: true, 
						selectable: true,
						selectHelper: true,

						events: [
						<?php foreach($events as $event): 
						
							$start = explode(" ", $event['start']);
							$end = explode(" ", $event['end']);
							if($start[1] == '00:00:00'){
								$start = $start[0];
							}else{
								$start = $event['start'];
							}
							if($end[1] == '00:00:00'){
								$end = $end[0];
							}else{
								$end = $event['end'];
							}
						?>
							{

								id: '<?php echo $event['id']; ?>',
								title: '<?php echo 'Title- '.$event['title'].', Teacher- '.$event['teacher'].', Branch- '.$event['branch'].', Session ID :- '.$event['id'].', Available Seats :- '.$event['booking']; ?>',
								start: '<?php echo $start; ?>',
								end: '<?php echo $end; ?>',
								color: '<?php echo $event['color']; ?>',
							},
						<?php endforeach; ?>
						]
					});		
				});

			</script>
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