<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit'])){
		$Title = $_POST['Title'];
		$rule = $_POST['rule'];
		$conn->query("UPDATE `rulesregulations` SET `Title` = '$Title', `rule` = '$rule' WHERE `id` = '$_REQUEST[id]'");
		header("location:rulesandregulation.php");
	}	?>