<?php

include("n413connect.php");
include("head.php");
$sql = "SELECT * FROM `list`
            ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
?>

<style>
    body {
         background-color: salmon;
    }
   
</style>


<div class="container-fluid" style="background-color: black; width: 80%; border-radius: 20px;">
        <div id="headline" class="row mt-5">
            <div class="col-12 text-center">
                <h1 style="color: white;">AMP JAM Site</h1>
            </div> <!-- /col-12 -->
        </div> <!-- /row -->
        <div id="subtitle" class="row">
            <div class="col-12 text-center">
                <h3 style="color: white;">The Top Ten Famous Swords List</h3>
            </div> <!-- /col-12 -->
        </div> <!-- /row -->
        <div id="content" class="row mt-5">
            <div class="col-1"></div><!-- spacer -->
            <div class="col-2 mt-5"> <!-- navigation -->  
                <a href="list.php" ><h4>Top Ten Famous Swords</h4></a>
                <a href="form.html" ><h4>Contact Us</h4></a>   
            </div> 
            <div class="col-6 text-center"> <!-- image -->  
                <a href="list.php">
                    <h2><?php echo $row["item"]; ?></h2>
                    <img src="listImages/<?php echo $row["image"]; ?>" width="100%"; /><br/>
                    </a>
            </div><!-- image placeholder -->    
        </div> <!-- /row -->
    </div> <!-- /container-fluid --> 
    
    <script>
        var this_page = "home";
        var page_title = "The Site | Top Ten Swords";
        $(document).ready(function(){
            
                document.title = page_title;
                navbar_update(this_page);
                
        });
    </script>