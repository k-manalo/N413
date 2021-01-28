<?php

include("n413connect.php");
$sql = "SELECT item FROM `list`";
$result = mysqli_query($link, $sql);
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
        	echo $row["item"].'<br/>';
}

