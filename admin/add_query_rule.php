<?php
	require_once 'connect.php';
	if(ISSET($_POST['add'])){
		$Title = $_POST['Title'];
		$rule = $_POST['rule'];
		$conn->query("INSERT INTO `rulesregulations` (Title, rule) VALUES('$Title', '$rule')");
		header("location:rulesandregulation.php");
		}
?>
