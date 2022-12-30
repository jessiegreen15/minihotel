<?php
require_once 'connect.php';
$time = date("H:i:s", strtotime("+6 HOURS"));
$query = $conn->query("SELECT * FROM `room_transaction`  WHERE transaction_id ='$_REQUEST[transaction_id]'");
$conn->query("UPDATE `room_transaction` SET `checkout_time` = '$time', `status` = 'Check Out' WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
echo "<script>document.location='checkin.php'</script>";
