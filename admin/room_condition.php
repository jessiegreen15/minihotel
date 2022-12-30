<!DOCTYPE html>
<?php
require_once 'validate.php';
require 'name.php';
?>
<html lang="eng">

<body>
    <?php
    include('header_menu.php');
    ?>
    <div class="container-fluid" style="max-width: 1500px; position: relative; margin-top:5%;">
        <div class="panel panel-default">
            <div class="alert alert-info">Transaction / Room Schedule for Maintainance</div>

            <div class="panel-body">
                <a class="btn btn-success" href="add_room.php"><i class="glyphicon glyphicon-plus"></i> Add Room</a>
                <a class="btn btn-success" href="add_room_restriction.php"><i class="glyphicon glyphicon-plus"></i>Room Maintainance</a>
                <br />
                <br />

                <table id="table" class="table table-bordered">

                    <thead>
                        <tr>
                            <th>Room no</th>
                            <th>Room Type</th>
                            <th>Schedule date</th>
                            <th>End date</th>
                            <th>Reason</th>
                            <th>Restriction description</th>
                            <th>service</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = $conn->query("SELECT * FROM `room_transaction` NATURAL JOIN `room` NATURAL JOIN room_type WHERE `status` = 'approved' && `service` = 'Under Maintainance' ");
                        while ($fetch = $query->fetch_array()) {
                        ?>
                            <tr>
                                <td><?php echo $fetch['room_id'] ?></td>
                                <td><?php echo $fetch['room_type'] ?></td>
                                <td><?php echo "<label style = 'color:#00ff00;'>" . date("M d, Y", strtotime($fetch['checkin'])) . "</label>" . "</label>" . " @ " . "<label>" . date("h:i a", strtotime($fetch['checkin_time'])) . "</label>" ?></td>
                                <td><?php echo "<label style = 'color:#ff0000;'>" . date("M d, Y", strtotime($fetch['checkin'] . "+" . $fetch['days'] . "DAYS")) . "</label>" ?></td>
                                <td><?php echo $fetch['reason'] ?></td>
                                <td><?php echo $fetch['restriction_description'] ?></td>
                                <td><?php echo $fetch['service'] ?></td>
                                <td>
                                    <a class="btn btn-warning" href="checkout_query.php?transaction_id=<?php echo $fetch['transaction_id'] ?>" onclick="confirmationCheckin(); return false;"><i class="glyphicon glyphicon-check"></i> Abort</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                </table>

            </div>
        </div>
    </div>
    <br />
    <br />
    <?php
    include('footer.php');
    ?>
</body>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.dataTables.js"></script>
<script src="../js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#table").DataTable();
    });
</script>
<script type="text/javascript">
    function confirmationCheckin(anchor) {
        var conf = confirm("Are you sure you want to abort?");
        if (conf) {
            window.location = anchor.attr("href");
        }
    }
</script>

</html>