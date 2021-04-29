<?php
    include("finalConnect.php");
    include("nav.php");
    $id = intval($_GET["id"]);
    $sql = "SELECT * FROM `wishes` WHERE id = '".$id."'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
?>

<style>
    .back {
        margin-bottom: 20px;
        margin: 0 auto;
        padding: 10px;
         background-color: #99ffff;
        height: 50px;
        width: 200px;
        border: 1px solid black;
        border-radius: 20px;
        text-decoration: none;
        color: black;
        text-align: center;
    }
    .detailImg {
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        width: 100%;
        height: 300px;
        border-bottom: 1px solid black;
    }
    .detail-container {
        text-align: center;
        margin: 0 auto;
        background-color:#ffff66;
        width: 40%;
        border-radius:20px;
        box-shadow: 2px 5px 8px 2px #888888;
        border: 1px solid grey;
    }
    .wishName {
        width: 100%;
        font-size: 50px;
        margin: 0 auto;
        font-family: 'Righteous', cursive;
        text-align: center;
        padding-bottom: 20px;
    }
    .pageImg {
        text-align: center;
        width: 100%;
        height: 250px;
        
        margin: auto;
    }
    .wishDetail-container {
        margin-bottom: 50px;
    }
    .backBtn {
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
</style>
<img src="images/wishbanner3.jpg" class="pageImg">
<div class="b-container">
 <a href="home.php" >
    <div class="backBtn">Back</div>
</a>   
</div>


</>

<div class="wishDetail-container">
    
    
    <?php
    
            if($row){
                echo '
                    
                    <div class="wishName">'.$row["name"].'</div>
                    
                    <div class="detail-container"><img class="detailImg" src="'.$row["url"].'" width="100%"/>
                    
                    <div>$'.$row["price"].'</div>
                    <div>'.$row["location"].'</div>
                    <div>'.$row["details"].'</div>
                    <div>'.$row["wisher"].' wants this.</div>
                    </div>
                    <br>';
            }
     
     
    ?>
</div>