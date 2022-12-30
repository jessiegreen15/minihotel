<?php
include('connect.php');
// Check connection
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "
  SELECT * FROM room_type 
  WHERE room_type_id LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM room_type ORDER BY room_type_id Limit 1
 ";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
';

 while($row = mysqli_fetch_array($result))
 {
  $output .= '      
  <div class = "form-group">
  <label>Person </label>
  <input type = "text" class = "form-control" value = "'.$row["room_type"].'" name = "person" disabled />
</div>
<div class = "form-group">
							<label>Description </label>
							<textarea type = "text" class = "form-control" value="" name = "description" disabled>'.$row["description"].'</textarea>
						</div>
                        <div class = "form-group">
							<label>Person </label>
							<input type = "text" class = "form-control" value = "'.$row["person"].'" name = "person" disabled/>
						</div>
						<div class = "form-group">
							<label>Price </label>
							<input type = "number" min = "0" max = "999999999" value ="'.$row["price"].'" class = "form-control" name = "price" disabled/>
						</div>
						
						
						</div>
                 ';
 }
  echo $output;
}
else
{
     echo  '<script>alert("data not found")</script>';

}

?>
            

</div></div>

<script>
    $(document).ready(function(){
		$pic = $('<img id = "image" width = "100%" height = "100%"/>');
		$lbl = $('<center id = "lbl">[Photo]</center>');
		$("#photo").change(function(){
			$("#lbl").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image").remove();
				$lbl.appendTo("#preview");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic.appendTo("#preview");
					$("#image").attr("src", this.result);
				}
			}
		});
	});
</script>