<?php
    include("n413connect.php");            
    include("head.php");
    
    $messages = array();
    $sql = "SELECT * FROM `form_responses`
            ORDER BY timestamp DESC";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
        $messages[] = $row;
    }
?>
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-12 text-center">
        <?php
            if(count($messages) > 0){
                echo '<h1>Contact Form Messages</h1>';
            }else{
                echo '<h2>There are no messages at this time.</h2>';
            }
        ?>
        </div> <!-- /.col-12 -->
    </div> <!-- /.row --> 
    <?php 
		if($_SESSION["role"] > 0){
			foreach($messages as $message){
				echo'
                            <div style="margin: 0 auto; width: 80%; background-color: lavender; text-align: center; border: 2px solid black; border-radius: 20px; padding-top: 15px;">
                            <div>A '.$message["job"].' named '.$message["name"].' is currently at '.$message["location"].' and says: '.$message["comment"].'<br></div>
                            <div style="color: blue; margin-bottom: 30px;">'.$message["timestamp"].'</div>
                            </div>
			';
			}
		}else{
			echo'
			<div class="row mt-3">
				<div class="col-12 text-center"><h3>You are not authorized to view the messages.</h3></div> 
			</div> <!-- /.row -->';
		}
		?>
</div>  <!-- /.container-fluid -->
</body>
<script>
    var this_page = "messages";
    var page_title = 'AMP JAM Site | Messages';
		
    $(document).ready(function(){ 
            document.title = page_title;
			navbar_update(this_page);
        }); //document.ready
</script>
</html>
