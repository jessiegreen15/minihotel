<style>
    .roe {
        font-size: 35px;
        letter-spacing: 2px;
        font-family: 'Jost';
        font-weight: bold;
        margin-left: 370px;
        color: #000;
        text-transform: uppercase;
    }

    .tpe {
        font-size: 25px;
        font-family: noto;
        font-weight: bold;
        letter-spacing: 2px;
        margin-left: 370px;
        text-transform: uppercase;
        margin-top: 1%;
        color: #000;
    }

    .dcs {
        font-size: 20px;
        font-family: noto;
        font-weight: 300;
        margin-left: 370px;
        width: 600px;
        margin-top: 1%;
        color: #000;

    }

    .pcs,
    .pes {
        font-size: 20px;
        font-family: noto;
        font-weight: 300;
        margin-left: 370px;
        margin-top: 1%;
        color: #000;
        max-width: 500px;
    }

    .rebuut {
        width: 180px;
        ;
        height: 35px;
        border: none;
        background: #24a0f2;
        color: #fff;
        border-radius: 5px;
        position: absolute;
        margin-left: 50%;
        margin-top: -2%;
        padding: 10px;
        text-align: center;
    }

    .rebuut:hover {
        background: #6bc0f7;
        text-decoration: none;
    }
</style><?php
        require('connect.php');
        $return = '';
        if (isset($_POST["query"])) {
            $search = mysqli_real_escape_string($conn, $_POST["query"]);
            $query = "SELECT * FROM room NATURAL JOIN room_type
	WHERE room_id  LIKE '%" . $search . "%'
	OR room_type LIKE '%" . $search . "%' 
	OR person LIKE '%" . $search . "%' 
	";
        } else {
            $query = "SELECT * FROM room NATURAL JOIN room_type";
        }
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row1 = mysqli_fetch_array($result)) {
                $return .= '
				<div class="well" style=" height:300px; width:97.7%;">
		<div class="pic" style = "float:left;">
		<img src = "../photo/' . $row1['photo'] . '" height = "250" width = "350" style="padding:3px; border:1px solid #b2b2b2; border-radius: 10px;"/>
        </div> 
        <h3 class="roe">' . $row1["room_type"] . '</h3>
		<h3 class= "tpe">Room Number:' . $row1["room_id"] . '</h3>
        <h4 class= "dcs">Description: ' . $row1["description"] . '</h4>
        <h4 class= "pes">No. Person:' . $row1["person"] . '</h4>
        <h4 class="pcs">Price: ' . $row1["price"] . '</h4>
        </br>
        <a class ="rebuut" href = "add_reserve_room_restriction.php?room_id= ' . $row1['room_id'] . '"><i class = "glyphicon glyphicon-list"></i> Reserve</a>
	</div>
	</div>
		';
            }
            echo $return;
        } else {
            echo 'No results containing all your search terms were found.';
        }

        ?>