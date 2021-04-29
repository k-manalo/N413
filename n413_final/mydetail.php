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
        margin: 0 auto;
        
    }
    .detail-container {
        
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
    .update {
       
        width: 50%;
        margin: 0 auto;
    }
    .wishDetail-container {
        margin: 0 auto;
        width: 100%;
       
    }
    .detail-container {
        margin: 0 auto;
    }
    .wishTitle {
        font-family: 'Righteous', cursive;
        width: 100%;
        text-align: center;
    }
    #name {
        border-radius: 20px;
        width: 100%;
    }
    #price {
        border-radius: 20px;
        width: 100%;
    }
    #url {
        border-radius: 20px;
        width: 100%;
    }
    #location {
        border-radius: 20px;
        width: 100%;
    }
    #details {
        border-radius: 20px;
        width: 100%;
    }
    #wisher {
        border-radius: 20px;
        width: 100%;
    }
    #submit {
        margin-top: 20px;
        margin-bottom: 20px;
        border-radius: 20px;
        background-color: #99ffff;
    }
    .delete {
        background-color: #99ffff;
        height: 30px;
        border-radius: 20px;
        padding: 5px;
        border: 2px solid black;
        text-decoration: none;
        color: black;
        margin: 0 auto;
    }
    .delete-container {
        padding-bottom: 50px;
        margin: 0 auto;
        width: 50%;
        
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
 <a href="wishes.php" >
    <div class="backBtn">Back</div>
</a>
</div>
    </>


<div class="wishDetail-container">
    <h1 class="wishTitle">Edit Wish</h1>
    
    <?php
    
            if($row){
                echo '
                    
                    
                    
                    <div class="detail-container"><img class="detailImg" src="'.$row["url"].'" width="100%"/>
                    
                    <form class="update" method="POST" action="finalUpdate.php">
                    <div id="wish-form">
                    <input type="hidden" id="id" name="wid" value="'.$row["id"].'" placeholder="1"/><br/>
                    Name: <input type="text" id="name" name="wname" value="'.$row["name"].'" placeholder="Wish Name" required/><br/>
                    Price: <input type="text" id="price" name="wprice" value="'.$row["price"].'" placeholder="Price" required/><br/>
                    Photo (URL): <input type="text" id="url" name="wurl" value="'.$row["url"].'" placeholder="Photo URL"/><br/>
                    Location (URL): <input type="text" id="location" name="wlocation" value="'.$row["location"].'" placeholder="Where To Get It" required/><br/>
                    Details: <input type="text" id="details" name="wdetails" value="'.$row["details"].'" placeholder="Wish Details"></textarea><br/>
                    Wisher: <input type="text" id="wisher" name="wwisher" value="'.$row["wisher"].'" placeholder="Who Wants It?" required/><br/>
        
                    <input type="submit" id="submit" value="Update" />
                    
                    </div>
                    </form>
                    <div class="delete-container">
                     <a class="delete" href="delete.php?id='.$row["id"].'">Delete</a>
                    </div>
                   
                    </div>
                    
            ';
            }
     
     
    ?>
</div>
<div style="margin-top: 50px; height: 15px;"></div>

