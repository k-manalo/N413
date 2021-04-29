<?php
include("finalConnect.php");
include("nav.php");
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

<?php


$id = intval($_GET["id"]);
$sql = "DELETE FROM `wishes` WHERE id = '".$id."'";
$result = mysqli_query($link, $sql);
 
        ?>
<div class="b-container">
 <a href="wishes.php" >
    <div class="backBtn">Back</div>
</a>   
</div>
<?php
       if($result) {
           echo '<div class="wishRemoved">Wish Removed</div>';
           ?>
           
           <?php
       }else {
           echo 'Deletion Failed';
       }