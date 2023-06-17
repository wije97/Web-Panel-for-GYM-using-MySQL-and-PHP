
<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


<script src="js/jquery.min.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>

<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>


</head>
<body>
 
	<div class="header">
	   <div class="container">
		  
		  </div>
		  <div class="header-arrow">
		     <a href="#menu" class="class scroll"><span> </span ></a>
		  </div>
	    </div>
	  </div>
	

    <div class="menu" id="menu">
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
			   <li><a href="about.php">About</a></li>			   
			   <li><a href="contact.php">Contact</a></li>
			   <li><a href="logout.php">LogOut</a></li>
			 </ul>
			  <script type="text/javascript" src="js/nav.js"></script>
		  </div>
		 <div class="clear"></div>
	  </div>
	</div>
	

	</br>
	</br>
	<div class="main">
	 	 
		
		<div class="container">
		    <div class="row content-middle">
		      
	 	    	
				 <div class="col-md-4">
					<div class="class_right">
						<h3>Timetable</h3>
						<p>View Sessions</p>
						<p>Add Sessions</p>
						<p>Delete Sessions</p>
						<p>Update Sessions</p>
						<div class="class_img">

							<div class="clear"></div>
							<ul class="buttons_class">
							 
							<li class="btn6"><a href="calindex.php">Timetable</a></li>	
							<div class="clear"></div>
						 	</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="class_right">
						<h3>New Teacher</h3>
						<p>Add A New Teacher</p>
						<p> &nbsp;</p>
						<p> &nbsp;</p>
						<p> &nbsp;</p>
						<div class="class_img">

							<div class="clear"></div>
							<ul class="buttons_class">
							 
							<li class="btn6"><a href="add_teacher.php">NEW</a></li>
							<div class="clear"></div>
						 	</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="class_right">
						<h3>Feedback</h3>
						<p>View All Customers Feedback</p>
						<p> &nbsp;</p>
						<p> &nbsp;</p>
						<p> &nbsp;</p>
						<div class="class_img">

							<div class="clear"></div>
							<ul class="buttons_class">
							 
							<li class="btn6"><a href="feedback_report.php">VIEW</a></li>
							<div class="clear"></div>
						 	</ul>
						</div>
					</div>
				</div>

				
				
				
			</div>

			<br>
			<div class="row content-middle">

				<div class="col-md-4">
					<div class="class_right">
						<h3>Student Report</h3>
						<p>Generate A Student Report</p>
						<p> &nbsp;</p>
						<p> &nbsp;</p>
						<p> &nbsp;</p>
						<div class="class_img">

							<div class="clear"></div>
							<ul class="buttons_class">
							 
							<li class="btn6"><a href="student_report.php">Report</a></li>
							<div class="clear"></div>
						 	</ul>
						</div>
					</div>
				</div>

				
				<div class="col-md-4">
					<div class="class_right">
						<h3>Teacher Report</h3>
						<p>Generate a Report</p>
						<p> &nbsp</p>
						<p> &nbsp</p>
						<p> &nbsp</p>
						<div class="class_img">

							<div class="clear"></div>
							<ul class="buttons_class">
							 
							<li class="btn6"><a href="teacher_report.php">Report</a></li>
							<div class="clear"></div>
						 	</ul>
						</div>
					</div>
				</div>

				




			</div>
		</div>
    	<div class="clear"></div>
    	<br><br>
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