<?php 
	session_start();
	if(!ISSET($_SESSION['guest_id'])){
		header("location:index.php");
	}