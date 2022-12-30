<?php
	require_once 'connect.php';
	if(ISSET($_POST['approve'])){
		$event_type_id = $_POST['event_type_id'];
		$query = $conn->query("SELECT * FROM `event_transaction` WHERE `event_type_id` = '$event_type_id' && `status` = 'approved'");
		$row = $query->num_rows;
		$time = date("H:i:s", strtotime("+8 HOURS"));
		if($row > 0){
			$query3 = $conn->query("SELECT * FROM `event_transaction` NATURAL JOIN `guest` NATURAL JOIN `event_type` WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
			$fetch3 = $query3->fetch_array();
			$conn->query("UPDATE `event_transaction` SET `status` = 'disapprove' WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
			echo "<script>alert('Sorry this Room is no longer available, Request disapprove');document.location='event_reserve.php'</script>";
		}else{
			$query2 = $conn->query("SELECT * FROM `event_transaction` NATURAL JOIN `guest` NATURAL JOIN `event_type` WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
			$fetch2 = $query2->fetch_array();
			$conn->query("UPDATE `event_transaction` SET `status` = 'approved' WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
			header("location:event_reserve.php");
		}
	}
?>

<?php
require_once 'connect.php';
if(ISSET($_POST['disapprove'])){
		$event_id = $_POST['transaction_id'];
		$query = $conn->query("SELECT * FROM `event_transaction` NATURAL JOIN event_type WHERE `transaction_id` = '$event_id' && `status` = 'Check In'");
		$row = $query->num_rows;
		$time = date("H:i:s", strtotime("+8 HOURS"));
		if($row > 0){
			echo "<script>alert('Event not available')</script>";
		}else{
			$query2 = $conn->query("SELECT * FROM `event_transaction` NATURAL JOIN `guest` NATURAL JOIN `event` NATURAL JOIN `event_type` WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
			$fetch2 = $query2->fetch_array();			
			$conn->query("UPDATE `event_transaction` SET `status` = 'Disapproved' WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
			header("location:event_reserve.php");
		}
	}

	?>