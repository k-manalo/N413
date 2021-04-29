<?php

include("n413connect.php");
include("head.php");

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
        $email = "";
        $fColor = "";
        $job = "";
        $food = "";
        $location = "";
        $comment = "";
        
        if(isset($_POST["name"])) { $name = sanitize($_POST["name"]); }
    	if(isset($_POST["email"])) { $email = sanitize($_POST["email"]); }
        if(isset($_POST["fColor"])) { $fColor = sanitize($_POST["fColor"]); }
        if(isset($_POST["job"])) { $job = sanitize($_POST["job"]); }
        if(isset($_POST["food"])) { $food = sanitize($_POST["food"]); }
        if(isset($_POST["location"])) { $location = sanitize($_POST["location"]); }
        if(isset($_POST["comment"])) { $comment = sanitize($_POST["comment"]); }
        
        $sql = "INSERT INTO `form_responses` (`id`, `name`, `email`, `fColor`, `job`, `food`, `location`, `comment`, `timestamp`) 
        VALUES (NULL, '".$name."', '".$email."', '".$fColor."', '".$job."', '".$food."', '".$location."', '".$comment."', CURRENT_TIMESTAMP)";
        
        $result = mysqli_query($link, $sql);
        
?>



<div class="container-fluid">
    <div id="headline" class="row mt-5">
        <div class="col-12 text-center">
            <h2>Story Time</h2>
        </div> <!-- /col-12 -->
    </div> <!-- /row -->
		<div id="alert">
		<?php
			if($result){
			    echo '<p>Once upon a time, deep within '.$location.', there lived a very ugly '.$job.' named '.$name.'. '.$name.' was disliked by everyone because his favorite color was '.$fColor.' and he never trimmed his fingernails. One day '.$name.' was skipping through town when he saw someone eating a '.$food.'. '.$name.' yelled, "'.$comment.'", and snatched the '.$food.' from the person. '.$name.' ate the '.$food.' in one bite and lived happily ever after.<br/>';
			}else{
			    echo '<p>I have rejected your comment.<br/>';
			}
		?>
		   
		</div>
</div>
<script>
    var this_page = "contact";
    var page_title = 'The Site | Contact Form';
		
    $(document).ready(function(){ 
            document.title = page_title;
            navbar_update(this_page);
        });
</script>