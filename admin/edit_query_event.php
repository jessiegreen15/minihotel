<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_event'])){
		$event_name = $_POST['event_name'];
		$description = $_POST['description'];
		$conn->query("UPDATE `event` SET `event_name` = '$event_name', `description` = '$description' WHERE `event_id` = '$_REQUEST[event_id]'") ;
		header("location:rulesandregulation.php");
	}	?>