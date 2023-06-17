<?php


require_once('bdd.php');

if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color'])&& isset($_POST['branch'])&& isset($_POST['teacher'])&& isset($_POST['bookingnum'])){
	
	$title = $_POST['title'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$color = $_POST['color'];
	$branch = $_POST['branch'];
	$teacher = $_POST['teacher'];
	$booking = $_POST['bookingnum'];

	$sql = "INSERT INTO events(title, start, end, color,branch,teacher,booking) values ('$title', '$start', '$end', '$color','$branch','$teacher','$booking')";
	
	
	echo $sql;
	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Error: Loading Failed');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Execute Error');
	}

}
header('Location: '.$_SERVER['HTTP_REFERER']);

	
?>
