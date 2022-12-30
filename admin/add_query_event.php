<?php
	if(ISSET($_POST['add_event'])){
		$event_name = $_POST['event_name'];
		$description = $_POST['description'];
		$conn->query("INSERT INTO `event` (event_name, description) VALUES('$event_name', '$description')");
		header("location:event_type.php");
	}
?>