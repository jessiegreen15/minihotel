<?php
include 'DBController.php';
$db_handle = new DBController();
$countryResult = $db_handle->runQuery("SELECT DISTINCT room_type_id, room_type  FROM room NATURAL JOIN room_type ORDER BY room_type_id, room_type ASC ");
?>
<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<title>Multiselect Dropdown Filter</title>
</head>
<body>
    <h2>Multiselect Dropdown Filter</h2>
    <form method="POST" name="search" action="roomtype.php">
        <div id="demo-grid">
            <div class="search-box">
                <select id="Place" name="country[]" multiple="multiple">
                    <option value="0" selected="selected">Select Country</option>
                        <?php
                        if (! empty($countryResult)) {
                            foreach ($countryResult as $key => $value) {
                                echo '<option value="' . $countryResult[$key]['room_type_id'].'  ' .$countryResult[$key]['room_type'] . '">' . $countryResult[$key]['room_type_id'].$countryResult[$key]['room_type'] . '</option>';
                            }
                        }
                        ?>
                </select><br> <br>
                <button id="Filter">Search</button>
            </div>
            
                <?php
                if (! empty($_POST['country'])) {
                    ?>
                    
                <?php
                    $query = "SELECT * from room NATURAL JOIN room_type";
                    $i = 0;
                    $selectedOptionCount = count($_POST['country']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                        $selectedOption = $selectedOption . "'" . $_POST['country'][$i] . "'";
                        if ($i < $selectedOptionCount - 1) {
                            $selectedOption = $selectedOption . ", ";
                        }
                        
                        $i ++;
                    }
                    $query = $query . " WHERE room_type_id in (" . $selectedOption . ")";
                    
                    $result = $db_handle->runQuery($query);
                }
                if (! empty($result)) {
                    foreach ($result as $key => $value) {
                        ?>
                        <div class = "well" style = "height:300px; width:100%;">
						<div style = "float:left;">
							<img src = "../photo/<?php echo $result[$key]['photo']?>" height = "250" width = "350" style="padding:3px; border:1px solid #b2b2b2; border-radius: 10px;"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h3 class="tpe"><?php echo $result[$key]['room_type']?></h3>
							<h3 class="tpe"><?php echo "Room Number:  " .$result[$key]['room_id']?></h3>
							<h4 class="dcs"><?php echo "Description:  " .$result[$key]['description']."/  Extra Pillow Price:  " .$result[$key]['pillow_price']."/  Extra Sheet price:  " .$result[$key]['sheet_price']."/  Extra Bed price:  " .$result[$key]['bed_price']?></h4>
							<h4 class="pcs"><?php echo "Price: Php. ".$result[$key]['price'].".00" ."/  Reservation Fee: ".$result[$key]['room_reservation_fee'].".00"?></h4>
							<br/>
							<a class="rebuut" href = "add_reserve.php?room_id=<?php echo $result[$key]['room_id']?>"><i class = "glyphicon glyphicon-list"></i> Reserve</a>

						</div>

					</div>
                <?php
                    }
                    ?>
                    
                </tbody>
            </table>
            <?php
                }
                ?>  
        </div>
    </form>
</body>
</html>

<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script type = "text/javascript">
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