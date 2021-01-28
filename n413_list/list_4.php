<?php

//echo '<h1>Famous Swords</h1>';

include("n413connect.php");
$sql = "SELECT id, item, description, image FROM `list`";
$result = mysqli_query($link, $sql);
$records = array();
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
        	$records[] = $row;
}


//.$row["item"].
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
            <title>Famous Swords || The List</title>
            <style>
                body {
                    background-color: salmon;
                    margin: auto;
                    
                }
                .desc {
                    background-color: tan;
                }
            </style>
        </head>
        <body>
            <h1 style="padding-left: 15px;">Famous Swords</h1>
            <?php
            foreach ($records as $record){
                echo '
                <div style="display: flex; padding-left: 15px; padding-right: 15px;">
                    <img src="listImages/'.$record["image"].'" style="height:200px;width:200px;margin-right:20px;border: 2px solid black;" />
                    <div class="desc" style="border: 2px solid black; padding: 10px; cursor: pointer;" onclick="show_alert('.$record["id"].', \''.$record["item"].'\');">  <h3>'.$record["item"].'</h3> <div style="background-color: black; height: 2px; width: 500px;"></div> <br> '.$record["description"].'</div>
                </div><br>';
            }
            ?>
        </body>
        <script>
            function show_alert(id,item){
                alert("You have clicked Item "+id+", "+item+".");
            }
        </script>
    </html>

