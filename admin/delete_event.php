
<?php
	 require_once 'connect.php';
	 $conn->query("DELETE FROM `event` WHERE `event_id` = '$_REQUEST[event_id]'");
	 header("location: eventtype.php");