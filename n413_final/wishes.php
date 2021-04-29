  
<?php
    include("finalConnect.php");
    include("nav.php");
    
    
    $sql = "SELECT id, name, price, url, location, details, wisher FROM `wishes` WHERE uid = '".$user_id."'";
    
    $result = mysqli_query($link, $sql);
    $records = array();
    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
        	$records[] = $row;
    }
     
     
?>

<style>
    .wishlist-container {
        
        width: 80%;
        
        margin: auto;
        display: flex;
        flex-direction: column;
    }
    .record-item {
        padding-top: 50px;
        padding-bottom: 50px;
        width: 100%;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        
    }
    .wishImg {
        background-color:#ffff66;
        box-shadow: 2px 5px 8px 2px #888888;
        border: 1px solid grey;
         border-radius: 20px;
        width: 50%;
        margin: 0 auto;
        
    }
    .img {
         border-top: 1px solid black;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
        margin: auto;
        width: 100%;
        height: 300px;
        cursor: pointer;
    }
    .wishesFor {
    
        width: 50%;
        margin: 0 auto;
        text-align: center;
        margin-bottom: 10px;
        font-size: 22px;
    }
    
    .addWish-container {
        
        width: 80%;
        padding-top: 50px;
        padding-bottom: 50px;
        margin: auto;
        display: flex;
    }
    
    .pageTitle {
        font-family: 'Righteous', cursive;
        text-align: center;
        width: 100%;
        height: 50px;
        font-size: 50px;
        margin: auto;
        padding-bottom: 25px;
        
    }
    .pageImg {
        text-align: center;
        width: 100%;
        height: 250px;
        padding-bottom: 50px;
        margin: auto;
    }
    
    
    .aWish {
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
    .titleDiv {
        
        height: 2px;
        width: 80%;
        background-color: black;
       margin: 0 auto;
       
    }
</style>

<img src="images/wishbanner3.jpg" class="pageImg">
<div class="pageTitle">
    My Wishes
</div>

</>

<div class="addWish-container">
     <a class="aWish" href="addWish.php">Add Wish</a>
</div>


      

<div class="wishlist-container">
    <div class="titleDiv">
    
</div>
   

    <?php
    
    
    
    
             foreach ($records as $record){
                 
                echo '
                    
                    <div class="col record-item cursor-pointer" data-id="'.$record["id"].'">
                    <div class="wishImg">
                    <div class="wishesFor">'.$record["name"].'</div>
                    <img class="img" src="'.$record["url"].'" width="50%"/>
                    
                    </div>
                    
                    </div>
                    <br>';
                 
            }
     
     
    ?>
</div>

<script>
            var this_page = "home";
            var page_title = "wishes";
            $(document).ready(function(){
            
                document.title = page_title;
                
                
                $(".record-item").on("click", function(){
                    
                    var id = $(this).data('id');
                    show_wish(id);
                    
                });
            });
            
            function show_wish(id){
                 window.location.assign("mydetail.php?id="+id);
            }
            
        </script>

