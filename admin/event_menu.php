<a class = "btn btn-info" href = "event_availability.php"><i class = "glyphicon glyphicon-plus"></i>Create Event</a>
<a class = "btn btn-warning" href="event_reserve.php"><span class = "badge"><?php echo $f_p['total']?></span> Pendings</a>
<a class = "btn btn-success" href="event_approve.php"><span class = "badge"><?php echo $f_a['total']?></span> Approved</a>
<a class = "btn btn-danger" href="event_cancelled.php">Cancelled</a>
<a class = "btn btn-danger" href="event_disapprove.php">Disapprove</a>
<a class = "btn btn-info" href = "event_checkin.php"><span class = "badge"><?php echo $f_ci['total']?></span> Current Event</a>
<a class = "btn btn-warning" href = "event_history.php"><i class = "glyphicon glyphicon-eye-open"></i> HISTORY</a>
