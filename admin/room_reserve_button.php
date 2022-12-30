<?php
$q_p = $conn->query("SELECT COUNT(*) as total FROM `room_transaction` WHERE `status` = 'pending'");
$f_p = $q_p->fetch_array();
$a_p = $conn->query("SELECT COUNT(*) as total FROM `room_transaction` WHERE `status` = 'approved' && service = 'reserved' or `status` = 'approved' && service = ''");
$f_a = $a_p->fetch_array();
$q_ci = $conn->query("SELECT COUNT(*) as total FROM `room_transaction` WHERE `status` = 'Check In'");
$f_ci = $q_ci->fetch_array();

?>

<a class="btn btn-info" href="availabilitybook.php"><i class="glyphicon glyphicon-plus"></i> Book Now</a>
<a class="btn btn-warning" href="room_reserve.php"><span class="badge"><?php echo $f_p['total'] ?></span> Pendings</a>
<a class="btn btn-success" href="approve.php"><span class="badge"><?php echo $f_a['total'] ?></span> Approved</a>
<a class="btn btn-success" href="current_date.php"><span class="badge">Current Date Reservation<span></span></a>
<a class="btn btn-danger" href="cancel.php">Cancelled</a>
<a class="btn btn-danger" href="disapprove.php"><span class="badge"></span> Disapproved</a>
<a class="btn btn-info" href="checkin.php"><span class="badge"></span> ROOM STATUS</a>
<a class="btn btn-info" href="checkout.php"><span class="badge"></span> History</a>