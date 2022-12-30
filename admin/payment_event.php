<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
	<head>
	
	</head>
<body>
<?php
	include('header_menu.php');

?>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Fill up form</div>
				<?php
					$query = $conn->query("SELECT * FROM `event_transaction` NATURAL JOIN `guest` NATURAL JOIN `event_type` WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
					$fetch = $query->fetch_array();
				?>
				<br />
				<form method = "POST" enctype = "multipart/form-data" action = "payment_event_query.php?transaction_id=<?php echo $fetch['transaction_id']?>">
					<div class = "form-inline" style = "float:left;">
						<label>Firstname</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['firstname']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Middlename</label>
						<br/>
						<input type = "text" value = "<?php echo $fetch['middlename']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Lastname</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['lastname']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>
					<br style = "clear:both;"/>
</br>
					<div class = "form-inline" style = "float:left;">
						<label>Event Name</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['event_name']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Event Theme</label>
						<br/>
						<input type = "text" value = "<?php echo $fetch['event_type_name']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Price</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['price']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>					<br style = "clear:both;"/></br>
					
					<div class = "form-inline" style = "float:left;">
						<label>No. People </label>
						<br />
						<input type = "number" min="10" max="100" value = "<?php echo $fetch['people']?>" class = "form-control" size = "40" name="people" disabled = "disabled"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label><?php echo "Meal Price:".$fetch['lunch_price']?></label>
						<br/>
						<input type = "number" min="10" max="100" value = "<?php echo $fetch['extra_lunch']?>" name="extra_lunch" class = "form-control" size = "40" disabled/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
					<label><?php echo "Snack Price:".$fetch['snack_price']?></label>
						<br />
						<input type = "number" min="10" max="100" value = "<?php echo $fetch['extra_snack']?>" class = "form-control" name ="extra_snack" size = "40" disabled/>
					</div>					
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Reserv. fee </label>
						<br/>
						<input type = "number" min="10" max="100" value = "<?php echo $fetch['reservation_fee']?>" class = "form-control" size = "40" name="reservation_fee" disabled = "disabled"/>
					</div>			
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Bill </label>
						<br/>
						<input type = "number" min="10" max="1000000" value = "<?php echo $fetch['bill']?>" class = "form-control" size = "40" name="reservation_fee" disabled = "disabled"/>
					</div>	
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Amount </label>
						<br/>
						<input type = "number" min="10" max="100000" value = "" class = "form-control" size = "40" name="amount" />
					</div>	 							<br style = "clear:both;"/>
                    
					</br>
                    <button name = "add_payment" class = "btn btn-primary" href=""> Pay</button>

				</form>
			</div>
		</div>
	</div>
	<br />
	<br />
	<?php
	include('footer.php');
	?>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>	
</html>