<?php
	 require_once 'connect.php';
	 $conn->query("DELETE FROM `rulesregulations` WHERE `id` = '$_REQUEST[id]'");
	 header("location: rulesandregulation.php");