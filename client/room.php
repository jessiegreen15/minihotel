<?php
require_once 'validate.php';
require 'name.php';
include('header_menu.php');
?>
<html>

<head>
	<link href="style.css" type="text/css" rel="stylesheet" />
	<style>

	</style>
</head>

<body>
	<div class="container-fluid" style="max-width: 1500px; position: relative; margin-top:5%;">
		<form method="POST" name="search" action="room.php">
			<div id="demo-grid">
				<div class="col-xs-12">
					<input type="text" name="search" id="search" placeholder="Search" class="form-control" />
					<div id="result"></div>
				</div>
			</div>
	</div>
	</form>
</body>

</html>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$pic = $('<img id = "image" width = "100%" height = "100%"/>');
		$lbl = $('<center id = "lbl">[Photo]</center>');
		$("#photo").change(function() {
			$("#lbl").remove();
			var files = !!this.files ? this.files : [];
			if (!files.length || !window.FileReader) {
				$("#image").remove();
				$lbl.appendTo("#preview");
			}
			if (/^image/.test(files[0].type)) {
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function() {
					$pic.appendTo("#preview");
					$("#image").attr("src", this.result);
				}
			}
		});
	});
	$(document).ready(function() {
		load_data();

		function load_data(query) {
			$.ajax({
				url: "search.php",
				method: "POST",
				data: {
					query: query
				},
				success: function(data) {
					$('#result').html(data);
				}
			});
		}
		$('#search').keyup(function() {
			var search = $(this).val();
			if (search != '') {
				load_data(search);
			} else {
				load_data();
			}
		});
	});
</script>