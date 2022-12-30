
<?php
	 require_once 'connect.php';
	 $conn->query("DELETE FROM `amenities` WHERE `amenities_id` = '$_REQUEST[amenities_id]'");
	 header("location: amenities.php");
     ?>