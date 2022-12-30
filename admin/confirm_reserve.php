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
					$query = $conn->query("SELECT * FROM `room_transaction` NATURAL JOIN `guest` NATURAL JOIN `room` NATURAL JOIN room_type WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
					$fetch = $query->fetch_array();
				?>
				<br />
				<form method = "POST" enctype = "multipart/form-data" action = "save_form.php?transaction_id=<?php echo $fetch['transaction_id']?>">
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
						<label>Room type</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['room_type']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Room #</label>
						<br/>
						<input type = "number" name="room_id" value = "<?php echo $fetch['room_id']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Price</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['price']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>					<br style = "clear:both;"/></br>
					
					<div class = "form-inline" style = "float:left;">
						<label>Days </label>
						<br />
						<input type = "number" min="10" max="100" value = "<?php echo $fetch['days']?>" class = "form-control" size = "40" name="days" disabled = "disabled" hidden/>
					</div>
					<div class = "form-inline" style = "float:left;">
						<label>Check in </label>
						<br />
						<input type="date" name = "checkin" value="<?php echo $fetch['checkin']?>"id="txtDate" required = "required" />
					</div>
					<div class = "form-inline" style = "float:left;">
						<label>Check out </label>
						<br />
						<input type="date" placeholder="Enter No. of Days" name = "checkout" value="<?php echo $fetch['checkout']?>" disabled />	
					</div>				</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label><?php echo "Sheet Price:".$fetch['sheet_price']?></label>
						<br/>
						<input type = "number" min="0" max="3" value = "" name="extra_sheet" class = "form-control" size = "40" required/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
					<label><?php echo "Pillow Price:".$fetch['pillow_price']?></label>
						<br />
						<input type = "number" min="0" max="3" value = "" class = "form-control" name ="extra_pillow" size = "40" required/>
					</div>		
					<div class = "form-inline" style = "float:left; margin-left:20px;">
					<label><?php echo "bed Price:".$fetch['bed_price']?></label>
						<br />
						<input type = "number" min="0" max="3" value = "" class = "form-control" name ="extra_bed" size = "40" required/>
					</div>	
					<div class = "form-inline" style = "float:left; margin-left:20px;">
					<label><?php echo "Breakfast Price:".$fetch['breakfast_price']?></label>
						<br />
						<input type = "number" min="0" max="5" value = "" class = "form-control" name ="extra_breakfast" size = "40" required/>
					</div>					
			<br style = "clear:both;"/>
					<div class = "form-inline" style = "float:left;">
						<label>Previous bill </label>
						<br />
						<input type = "number" min="10" max="100" value = "<?php echo $fetch['bill']?>" class = "form-control" size = "40" name="" disabled = "disabled" hidden/>
					</div>
					<div class = "form-inline" style = "float:left;">
						<label>Remaining </label>
						<br />
						<input type = "number" min="10" max="100" value = "<?php echo $fetch['bill'] - $fetch['changes'] + $fetch['amount'];?>" class = "form-control" size = "40" name="" disabled = "disabled" hidden/>
					</div>
					<div class = "form-inline" style = "float:left;">
						<label>Paid </label>
						<br />
						<input type = "number" min="10" max="100" value = "<?php echo $fetch['amount'] + $fetch['changes']?>" class = "form-control" size = "40" name="" disabled = "disabled" hidden/>
					</div>
						<br style = "clear:both;"/>
					</br>
					<button onclick = "confirmationadd(this); return false;" name = "add_form" class = "btn btn-primary" ><i class = "glyphicon glyphicon-save"></i> Check in</button>
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
<script> function confirmationadd(anchor){
		var conf = confirm("Are you sure you want to modified this record as checkin?");
		if(conf){
			window.location = anchor.attr("");
		}
	} 
	</script>


</html>