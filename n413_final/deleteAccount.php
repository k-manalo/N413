<?php
    include("finalConnect.php");
    include("deletenav.php");
    
    
    
     
?>
<style>
    .backBtn {
        margin-top: 50px;
        margin-left: 50px;
        background-color:#ffff66;
        width: 100px;
        height: 50px;
        text-align: center;
        font-size: 20px;
        padding-top: 7px;
        color: black;
        text-decoration: none;
        border: 1px solid black;
    }
    .b-container {
        
        width: 100px;
        margin-left: 50px;
    }
    .wishRemoved {
        text-align: center;
        margin: 0 auto;
        font-size: 25px;
    }
</style>


<div class="b-container">
 <a href="index.php" >
    <div class="backBtn">Back</div>
</a>   
</div>

<?php

$sql = "DELETE FROM `users` WHERE id = '".$user_id."'";
    
    $result = mysqli_query($link, $sql);
    if($result) {
           echo '<div class="wishRemoved">Account Deleted</div>';
           
       }else {
           echo 'Deletion Failed';
       }
?>