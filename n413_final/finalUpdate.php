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
    .wishUpdated {
        text-align: center;
        margin: 0 auto;
        font-size: 25px;
    }
</style>
 
         
<?php
        $query = "UPDATE wishes SET name='$_POST[wname]' ,price='$_POST[wprice]' ,url='$_POST[wurl]' ,location='$_POST[wlocation]' ,details='$_POST[wdetails]' ,wisher='$_POST[wwisher]' WHERE id = '$_POST[wid]'";
        
        $result = mysqli_query($link, $query);
        ?>
<div class="b-container">
 <a href="wishes.php" >
    <div class="backBtn">Back</div>
</a>   
</div>
      <?php  
       if($result) {
           echo '<div class="wishUpdated">Wish Updated</div>';
          
       }else {
           echo 'Update Failed';
       }