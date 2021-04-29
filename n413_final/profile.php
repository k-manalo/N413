  
<?php
    include("finalConnect.php");
    include("nav.php");
    
    
    $sql = "SELECT id, uname, email, password FROM `users` WHERE id = '".$user_id."'";
    
    $result = mysqli_query($link, $sql);
    $records = array();
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
     
     
?>
<style>
     .pageImg {
        text-align: center;
        width: 100%;
        height: 250px;
        
        margin: auto;
    }
    .profile-container {
        background-color: #117a8b;
        height: 300px;
        width: 50%;
        box-shadow: 2px 5px 8px 2px #888888;
        border: 1px solid grey;
        border-radius: 20px;
        margin: 0 auto;
        color: black;
        display: flex;
        flex-direction: row;
        
    }
    .account-info {
        padding-left: 50px;
        padding-top: 110px;
        
        width: 50%;
        height: 100%;
        font-size: 20px;
    }
    .passWord {
        -webkit-text-security: disc;
    }
    .pass-container {
        display: flex;
        margin-right: 5px;
    }
    .profileLogout {
         padding: 10px;
        background-color:#ffff66;
        height: 50px;
        width: 200px;
        box-shadow: 2px 5px 8px 2px #888888;
        border: 1px solid grey;
        border-radius: 20px;
        text-decoration: none;
        color: black;
        text-align: center;
    }
    .deleteAccount {
        padding: 10px;
        background-color:#ffff66;
        height: 50px;
        width: 200px;
        box-shadow: 2px 5px 8px 2px #888888;
        border: 1px solid grey;
        border-radius: 20px;
        text-decoration: none;
        color: black;
        text-align: center;
        margin-top: 25px;
    }
    a {
        color: black;
        text-decoration: none;
    }
    .account-btns {
        padding-top: 75px;
        margin-left: 100px;
        
    }
    .title-container {
        width: 60%;
        
        margin: 0 auto;
        display: flex;
    }
    .pageTitle {
        font-family: 'Righteous', cursive;
        width: 100%;
        height: 50px;
        font-size: 50px;
        margin: auto;
        padding-bottom: 25px;
        text-align: center;
        margin-bottom: 50px;
        
    }
</style>
<img src="images/wishbanner3.jpg" class="pageImg">
<div class="title-container">
   <div class="pageTitle">
    Profile
    </div>
    
</div>
<div class="profile-container">
    <div class="account-info">
         <?php
    
            if($row){
                echo '
                    
                    <div class="userName">Name: '.$row["uname"].'</div>              
                    <div class="email">Username: '.$row["email"].'</div>
                    <div class="pass-container">Password: <div class="passWord">'.$row["password"].'</div></div>
                    
                    
                    
                    <br>';
            }
     
     
    ?>
    </div>
    <div class="account-btns">
        <div class="profileLogout">
            <a href="index.php">Logout</a>
        </div>
        <div class="deleteAccount">
            <a href="deleteAccount.php?uid=<?php $user_id ?>">Delete Account</a>
        </div>
    </div>
</div>
