<?php


require_once('bdd.php');
if (isset($_POST['stname']) && isset($_POST['nic']) && isset($_POST['sessionid'])){
	
	$name = $_POST['stname'];
	$nic = $_POST['nic'];
	$sesid = $_POST['sessionid'];

	session_start();
	$sql = "SELECT booking FROM events WHERE  id ='$sesid' LIMIT 1 ";

	$result = $bdd->prepare($sql);
	$result->execute();

	$seats = $result->fetch();

	echo "$seats[0]";

	$new = $seats[0];

	if($new >0){

		$new = $new-1;

		$sql = "UPDATE events SET  booking = '$new' WHERE id = '$sesid' ";

		$query = $bdd->prepare( $sql );
		if ($query == false) {
			print_r($bdd->errorInfo());
			die ('Error: Loading Failed');
		}
		$sth = $query->execute();
		if ($sth == false) {
			print_r($query->errorInfo());
			die ('Execute Error');
		}else{

			$sql = "INSERT INTO tblbooking(name, nic,sessionid) values ('$name', '$nic', '$sesid')";
		
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
			
			?>
			<script type="text/javascript">
				if (confirm("Booking Successful..!")) {
					window.location.href = "calindexstu.php";
					}
					else{
					window.location.href = "calindexstu.php";
				} 
			</script>
			<?php
            
		}
	}else{

		?>
			<script type="text/javascript">
				if (confirm("Sorry..! Session Is Full.")) {
					window.location.href = "calindexstu.php";
				}
				else{
					window.location.href = "calindexstu.php";
				} 
			</script>
			<?php

	}
}
?>