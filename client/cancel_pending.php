<?php
	require_once '../admin/connect.php';
	$conn->query("UPDATE `room_transaction` SET `status` = 'cancelled' WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
	echo "<script>document.location='room_reserve.php'</script>";
	?>

