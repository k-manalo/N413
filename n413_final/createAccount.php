<?php

include("finalConnect.php");
include("anonnav.html");

function sanitize($item){
    global $link;
    $item = html_entity_decode($item);
    $item = trim($item);
    $item = stripslashes($item);
    $item = strip_tags($item);
    $item = mysqli_real_escape_string( $link, $item );
    return $item;
}   

        $uname = "";
        $email = "";
        $password = "";
        
         if(isset($_POST["uname"])) { $uname = sanitize($_POST["uname"]); }
        if(isset($_POST["email"])) { $email = sanitize($_POST["email"]); }
        if(isset($_POST["password"])) { $password = sanitize($_POST["password"]); }
        
        $sql = "INSERT INTO `users` (`id`, `uname`, `email`, `password`) 
        VALUES (NULL, '".$uname."', '".$email."', '".$password."')";
        
        $result = mysqli_query($link, $sql);
        
?>
<style>
    #add-alert {
    margin: 0 auto;
    width: 100%;
    
    margin-top: 50px;
    font-size: 25px;
    text-align: center;
    }
    .great {
        padding: 10px;
        background-color:#ffff66;
        height: 50px;
        width: 200px;
        box-shadow: 2px 5px 8px 2px #888888;
        border: 1px solid grey;
        border-radius: 20px;
        text-decoration: none;
        color: black;
        text-align: center;
    }
</style>
<div id="add-alert">
    <?php
            if($result){
                echo '<p>Account Created</p><br>';
                echo '<a class="great" href="login.php">Login</a>';
            }else{
                echo '<p>Account Creation Failed.</p>';
            }
    ?>

    </div>
