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
    .signupForm {
         background-color: #117a8b;
        height: 300px;
        width: 50%;
        box-shadow: 2px 5px 8px 2px #888888;
        border: 1px solid grey;
        border-radius: 20px;
        margin: 0 auto;
        color: black
        
    }
    #submit {
         border-radius: 20px;
        width: 100px;
        margin-top: 20px;
        background-color:#ffff66;
        color: black;
        
    }
    #email {
        border-radius: 20px;
    }
    #password {
        border-radius: 20px;
    }
    #uname {
        border-radius: 20px;
    }
</style>

<div class="title">
    <h2>
        Signup
    </h2>
</div>

<form class="signupForm" method="POST" action="createAccount.php">
    <div class="row mt-5">
        <div class="col-4"></div>
        <div id="form-container" class="col-4">
            Name: <input type="text" id="uname" name="uname"  value="" required/><br/>
            Username: <input type="text" id="email" name="email"  value="" required/><br/>
            Password: <input type="password" id="password" name="password" value="" required/><br/>
            <button type="submit" id="submit" class="btn btn-primary">Enter</button>
        </div>
    </div>
</form>