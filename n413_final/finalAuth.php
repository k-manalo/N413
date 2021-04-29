<?php
    include("finalConnect.php");
    
    
    
    
    ?>
<style>
    
    .loginForm {
        background-color: #117a8b;
        height: 300px;
        width: 50%;
        border: 1px solid black;
        border-radius: 20px;
        margin: 0 auto;
        text-align: center;
        font-size: 25px;
        
    }
    .enter-container {
        height: 50px;
        width: 100px;
        margin: 0 auto;
        background-color: #ffff66;
        color: black;
        padding-top: 10px;
        border-radius: 20px;
    }
    .try-container {
        height: 50px;
        width: 150px;
        margin: 0 auto;
        background-color: #ffff66;
        color: black;
        padding-top: 20px;
        border-radius: 20px;
    }
    a {
        text-decoration: none;
        color: black;
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
        
        $email = "";
        $password = "";
        
        if(isset($_POST["email"])) { $email = sanitize($_POST["email"]); }
    	if(isset($_POST["password"])) { $password = sanitize($_POST["password"]); }
        
        $sql= "SELECT * FROM `users` 
               WHERE email = '".$email."'
               AND password = '".$password."'
               LIMIT 1";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_BOTH);
        if($row){
            session_start();
            $_SESSION["user_id"] = $row["id"];
            
        }
        
        
        
?> 
        <div class="loginForm">
        <?php
            if(isset($_SESSION["user_id"])){
                echo ' <h3>Login Successful</h3>';
        ?>
            <div class="enter-container">
                <a href="wishes.php?uid=<?php echo $row["id"] ?>">Enter</a>
            </div>
            
        <?php
            }else{
                echo '<h3>Incorrect Email or Password</h3>
                      <div class="try-container"><a href="login.php">Try Again</a></div>';
            }
        ?>
        </div>

