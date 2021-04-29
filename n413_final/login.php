<?php
include("anonnav.html");
?>

<style>
    .title {
        margin-top: 20px;
        margin-bottom: 20px;
        font-family: 'Righteous', cursive;
        width: 100%;
        text-align: center;
    }
    .loginForm {
        background-color: #117a8b;
        height: 300px;
        width: 50%;
        
        border-radius: 20px;
        margin: 0 auto;
        box-shadow: 2px 5px 8px 2px #888888;
        border: 1px solid grey;
        
        
    }
    #submit {
        border-radius: 20px;
        width: 100px;
        margin-top: 20px;
        background-color:#ffff66;
        color: black;
        border: black;
    }
    #email {
        border-radius: 20px;
    }
    #password {
        border-radius: 20px;
    }
</style>

<div class="title">
    <h2>
        Login
    </h2>
</div>

<form class="loginForm" method="POST" action="finalAuth.php">
    <div class="row mt-5">
        <div class="col-4"></div>
        <div id="form-container" class="col-4">
            Username: <input type="text" id="email" name="email"  value="" required/><br/>
            Password: <input type="password" id="password" name="password" value="" required/><br/>
            <button type="submit" id="submit" class="btn btn-primary">Enter</button>
        </div>
    </div>
</form>

