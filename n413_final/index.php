<?php
    include("finalConnect.php");
    include("anonnav.html");

?>

<style>
    .indexBanner {
        height: 400px;
        width: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        border: 1px solid black;
        margin-bottom: 20px;
    }
    
    .top-border {
        height: 2px;
        width: 75%;
        background-color: black;
        
        margin: 0 auto;
    }
    .about {
        padding-top: 20px;
        
        width: 50%;
        height: 100px;
        margin: 0 auto;
        text-align: center;
    }
    .bottom-border {
        height: 2px;
        width: 75%;
        background-color: black;
        
        margin: 0 auto;
    }
    .account-container {
        padding-top: 20px;
        width: 75%;
        height: 200px;
        margin: 0 auto;
    }
    .account-btns {
        display: flex;
        
        width: 500px;
        margin: 0 auto;
        justify-content: space-between;
    }
    #login_btn {
        
       
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
    #signup_btn {
       
       box-shadow: 2px 5px 8px 2px #888888;
        border: 1px solid grey;
        padding: 10px;
        background-color:#ffff66;
        height: 50px;
        width: 200px;
        
        border-radius: 20px;
        text-decoration: none;
        color: black;
        text-align: center;
    }
    .pageTitle {
        font-family: 'Righteous', cursive;
        width: 100%;
        height: 50px;
        font-size: 50px;
        margin: auto;
        padding-bottom: 105px;
        text-align: center;
        
    }
</style>
<html>
    <head>
        <meta charset="UTF-8">
    <img class="indexBanner" src="images/banner.jpg">
        
    </head>
    <body>
        <div class="pageTitle">
            Welcome!
        </div>
        <div class="top-border"></div>
        <div class="about">
            <p>
                Wishing Well is your home to all the products you'd like to keep track of online. Add and save what you've always been wanting, or take a look at what other people are wishing for!
            </p>
        </div>
        <div class="bottom-border"></div>
        <div class="account-container">
            <div class="account-btns">
                <a id="login_btn"  href="login.php">Login</a>
            <a id="signup_btn" href="signup.php">Signup</a> 
            </div>
           
        </div>
        
    </body>
</html>
