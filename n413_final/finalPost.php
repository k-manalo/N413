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
    .wishAdded {
        text-align: center;
        margin: 0 auto;
        font-size: 25px;
    }
</style>

<?php
function sanitize($item){
    global $link;
    $item = html_entity_decode($item);
    $item = trim($item);
    $item = stripslashes($item);
    $item = strip_tags($item);
    $item = mysqli_real_escape_string( $link, $item );
    return $item;
}   

        $name = "";
        $price = "";
        $url = "";
        $location = "";
        $details = "";
        $wisher = "";
        
        
        if(isset($_POST["name"])) { $name = sanitize($_POST["name"]); }
    	if(isset($_POST["price"])) { $price = sanitize($_POST["price"]); }
        if(isset($_POST["url"])) { $url = sanitize($_POST["url"]); }
        if(isset($_POST["location"])) { $location = sanitize($_POST["location"]); }
        if(isset($_POST["details"])) { $details = sanitize($_POST["details"]); }
        if(isset($_POST["wisher"])) { $wisher = sanitize($_POST["wisher"]); }
        
        $sql = "INSERT INTO `wishes` (`id`, `name`, `price`, `url`, `location`, `details`, `wisher`, `uid`) 
        VALUES (NULL, '".$name."', '".$price."', '".$url."', '".$location."', '".$details."', '".$wisher."', '".$user_id."')";
        
        $result = mysqli_query($link, $sql);
        
?>
           <div class="b-container">
 <a href="wishes.php" >
    <div class="backBtn">Back</div>
</a>   
</div>
    
    <?php
            if($result){
                echo '<div class="wishAdded">Your Wish Has Been Added</div><br>';
                
            }else{
                echo '<p>Wish Denied</p>';
            }
    ?>

    


