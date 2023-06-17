<?php
require_once('bdd.php');


$sql = "SELECT id, title, start, end, color, branch, teacher,booking FROM events ";

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

    <link href="css/calbootstrap.min.css" rel="stylesheet">
	

	<link href='css/fullcalendar.css' rel='stylesheet' />

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
				<a href="index.php"><H2>FIGHTER FITNESS</H2></a>
			 </div>
			 <div class="h_menu4">
			   <a class="toggleMenu" href="#">Menu</a>
				 <ul class="nav">
				   <li><a href="admin_Dashboard.php">Dashboard</a></li>
					<li><a href="about.php">About</a></li>
					<li class="active"><a href="contact.php">Contact</a></li>
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

			<div class="row">
				<div class="col-lg-12 text-center">
					<div id="calendar" class="col-centered">
					</div>
				</div>
				
			</div>
			

			<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<form class="form-horizontal" method="POST" action="addEvent.php">
						
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Add Event</h4>
							</div>
							<div class="modal-body">
								
								<div class="form-group">
									<label for="title" class="col-sm-2 control-label">Session</label>
									<div class="col-sm-10">
										<input type="text" name="title" class="form-control" id="title" placeholder="Session">
									</div>
								</div>
								<div class="form-group">
									<label for="teacher" class="col-sm-2 control-label">Teacher</label>
									<div class="col-sm-10">
										<input type="text" name="teacher" class="form-control" id="teacher" placeholder="Teacher Name">
									</div>
								</div>

								<div class="form-group">
									<label for="branch" class="col-sm-2 control-label">Branch</label>
									<div class="col-sm-10">
										<select name="branch" class="form-control" id="branch">
											<option value="">Choose</option>
											<option value="Hillview">&#9724; Hillview</option>
											<option value="Little India">&#9724; Little India</option>
											<option value="Getlang">&#9724; Getlang</option>						 
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="bookingnum" class="col-sm-2 control-label">Booking</label>
									<div class="col-sm-10">
										<input type="text" name="bookingnum" class="form-control" id="bookingnum" placeholder="Number Of Booking">
									</div>
								</div>
								<div class="form-group">
									<label for="color" class="col-sm-2 control-label">Color</label>
									<div class="col-sm-10">
										
										<select name="color" class="form-control" id="color">
											<option value="">Choose</option>
											<option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
											<option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
											<option style="color:#008000;" value="#008000">&#9724; Green</option>						  
											<option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
											<option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
											<option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
											<option style="color:#000;" value="#000">&#9724; Black</option>
										</select>

									</div>
								</div>

								<div class="form-group">
									<label for="start" class="col-sm-2 control-label">Start date</label>
									<div class="col-sm-10">
										<input type="datetime-local" name="start" class="form-control" id="start" >
									</div>
								</div>

								<div class="form-group">
									<label for="end" class="col-sm-2 control-label">End date</label>
									<div class="col-sm-10">
										<input type="datetime-local" name="end" class="form-control" id="end">
									</div>
								</div>
								
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Save changes</button>
							</div>

						</form>
					</div>
				</div>
			</div>
			
			
			
			<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<form class="form-horizontal" method="POST" action="editEventTitle.php">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Edit Event</h4>
							</div>

							<div class="modal-body">
									
								<div class="form-group">
									<label for="title" class="col-sm-2 control-label">Title</label>
									<div class="col-sm-10">
										<input type="text" name="title" class="form-control" id="title" placeholder="Title">
									</div>
								</div>

								<div class="form-group">
									<label for="teacher" class="col-sm-2 control-label">Teacher</label>
									<div class="col-sm-10">
										<input type="text" name="teacher" class="form-control" id="teacher" placeholder="Teacher Name">
									</div>
								</div>

								<div class="form-group">
									<label for="branch" class="col-sm-2 control-label">Branch</label>
									<div class="col-sm-10">
										<select name="branch" class="form-control" id="branch">
											<option value="">Choose</option>
											<option value="Hillview">&#9724; Hillview</option>
											<option value="Little India">&#9724; Little India</option>
											<option value="Getlang">&#9724; Getlang</option>						 
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="color" class="col-sm-2 control-label">Color</label>
									<div class="col-sm-10">
										<select name="color" class="form-control" id="color">
											<option value="">Choose</option>
											<option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
											<option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
											<option style="color:#008000;" value="#008000">&#9724; Green</option>						  
											<option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
											<option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
											<option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
											<option style="color:#000;" value="#000">&#9724; Black</option>
											
										</select>
									</div>
								</div>

								<div class="form-group"> 
									<div class="col-sm-offset-2 col-sm-10">
										<div class="calcheckbox">
											<label class="text-danger"><input  type="checkbox" class="form-control" name="delete"> Delete event</label>
										</div>
									</div>
								</div>
								
								<input type="hidden" name="id" class="form-control" id="id">
								
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Save changes</button>
							</div>

						</form>
					</div>
				</div>
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
				editable: true,
				eventLimit: true, 
				selectable: true,
				selectHelper: true,

				select: function(start, end) {
					
					$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
					$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
					$('#ModalAdd').modal('show');
				},

				eventRender: function(event, element) {
					element.bind('dblclick', function() {
						$('#ModalEdit #id').val(event.id);
						$('#ModalEdit #title').val(event.title);
						
						$('#ModalEdit #teacher').val(event.teacher);
						$('#ModalEdit #branch').val(event.branch);

						$('#ModalEdit #color').val(event.color);
						$('#ModalEdit').modal('show');
					});
				},

				eventDrop: function(event, delta, revertFunc) { 

					edit(event);

				},

				eventResize: function(event,dayDelta,minuteDelta,revertFunc){ 

					edit(event);

				},

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
						title: '<?php echo $event['title']; ?>',
						start: '<?php echo $start; ?>',
						end: '<?php echo $end; ?>',
						color: '<?php echo $event['color']; ?>',
					},

				<?php endforeach; ?>
				]
			});
			
			function edit(event){

				start = event.start.format('YYYY-MM-DD HH:mm:ss');
				if(event.end){
					end = event.end.format('YYYY-MM-DD HH:mm:ss');
				}else{
					end = start;
				}
				
				id =  event.id;
				
				Event = [];
				Event[0] = id;
				Event[1] = start;
				Event[2] = end;
				
				$.ajax({
					url: 'editEventDate.php',
					type: "POST",
					data: {Event:Event},

					success: function(rep) {
							if(rep == 'OK'){
								alert('Saved');
							}else{
								alert('Could not be saved. try again.'); 
							}
					}
				});
			}
			
		});

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