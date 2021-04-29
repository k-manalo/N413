<?php

//echo '<h1>Famous Swords</h1>';

include("n413connect.php");
include("head.php");
$sql = "SELECT id, item, description, image FROM `list`";
$result = mysqli_query($link, $sql);
$records = array();
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
        	$records[] = $row;
}


//.$row["item"].
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
            <title>Famous Swords || The List</title>
            <style>
                body {
                    background-color: salmon;
                    margin: auto;
                    
                }
                .desc {
                    background-color: tan;
                }
            </style>
        </head>
        <body>
            <h1 style="padding-left: 15px;">Famous Swords</h1>
            <?php
             foreach ($records as $record){
                echo '
                    <div class="row record-item mt-3 cursor-pointer" data-id="'.$record["id"].'" data-item="'.$record["item"].'">
                    <div class="col-1"></div>  <!-- spacer -->
                    <div class="col-2"><img src="listImages/'.$record["image"].'" width="100%"/></div>
                    <div class="col-7"><b>'.$record["item"].'</b> '.$record["description"].'</div>
                    </div>  <!-- /.row -->';
    }
            ?>
            <div class="container-fluid">
                <div id="headline" class="row mt-5">
                    <div class="col-12 text-center">
                        <h2>Full Stack Amp Jam ____ Project</h2>
                    </div>
                </div>
            </div> 
        </body>
        <script>
            var this_page = "list";
            var page_title = "The Site | Top Ten Swords";
            $(document).ready(function(){
            
                document.title = page_title;
                navbar_update(this_page);
                
                $(".record-item").on("click", function(){
                    
                    var id = $(this).data('id');
                    show_detail(id);
                    
                });
            });
            
            function show_detail(id){
                 window.location.assign("detail.php?id="+id);
            }
            
        </script>
    </html>

