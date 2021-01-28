<?php

 echo '<h1>Famous Swords</h1>';

include("n413connect.php");
$sql = "SELECT item, image FROM `list`";
$result = mysqli_query($link, $sql);
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
        	echo $row["item"].'<br/>';
                echo '<img src="listImages/'.$row["image"].'" style="height:200px;width:200px;margin-right:20px;" />'.'<br/>';
}


//.$row["item"].