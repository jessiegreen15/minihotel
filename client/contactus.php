
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<!DOCTYPE html>
<html lang = "en">
<head>
</head>

<body>
<?php
include('header_menu.php');
?>


<div style="max-width: 1500px; position: relative; margin-top:5%;  " class = "container-fluid">
<div class = "panel panel-default">
    <div class = "panel-body">
	<?php
		$query = $conn->query("SELECT * FROM `contactus`  WHERE `id` = '1'");
		$contact = $query->fetch_array();
				?>
        <strong><h3>CONTACT US</h3></strong>
        <br />
        <br />
        <center><img src = "../images/<?php echo $contact['photo']?>" width = "300" height = "300" /></center>
        <br />
        <br />
        <center>
        <p>Email: <?php echo $contact['email']?></p>
        <p>Contact: <?php echo $contact['contact']?></p>
        <p>Address: <?php echo $contact['address']?></p>
        </center>
    </div>
</div>
</div>
	<br />
	<br />

</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>	
</html>