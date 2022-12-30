<a class = "btn btn-success" href = "event_availability.php"><i class = "glyphicon glyphicon-plus"></i>Create Event</a>
<a class = "btn btn-success" href="event_reserve.php"><span class = "badge"><?php echo $f_p['total']?></span> Pendings</a>
<a class = "btn btn-success" href="event_approve.php"><span class = "badge"><?php echo $f_a['total']?></span> Approved</a>
<a class = "btn btn-success" href="event_disapprove.php"><span class = "badge"><?php echo $f_p['total']?></span> Cancelled</a>
<a class = "btn btn-info" href = "event_current.php"><span class = "badge"><?php echo $f_ci['total']?></span> Check In</a>
<a class = "btn btn-warning" href = "event_checkout.php"><i class = "glyphicon glyphicon-eye-open"></i> Check Out</a>
