<?php
require_once 'connect.php';
$conn->query("UPDATE `room_transaction` SET `service` = 'Reserved' WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
echo "<script>document.location='current_date.php'</script>";
