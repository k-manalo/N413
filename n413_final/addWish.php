<?php
include("nav.php");
include("finalConnect.php");
?>

<style>
    
    .pageTitle {
        font-family: 'Righteous', cursive;
        text-align: center;
        width: 100%;
        height: 50px;
        font-size: 50px;
        margin: auto;
        padding-bottom: 25px;
        
    }
    
    .wishForm {
        padding-top: 50px;
        width: 50%;
        margin: 0 auto;
    }
    
    #wish-form {
        align-items: center;
        
        width: 400px;
        
        margin: 0 auto;
        padding: 20px;
        
       
    }
    #name {
        width: 100%;
        height: 50px;
        border-radius: 20px;
        margin-bottom: 10px;
       
    }
    #price {
        width: 100%;
        height: 50px;
        border-radius: 20px;
        margin-bottom: 10px;
    }
    #url {
        width: 100%;
        height: 50px;
        border-radius: 20px;
        margin-bottom: 10px;
    }
    #location {
        width: 100%;
        height: 50px;
        border-radius: 20px;
        margin-bottom: 10px;
    }
    #details {
        width: 100%;
        height: 100px;
        border-radius: 20px;
        margin-bottom: 10px;
    }
    #wisher {
        width: 100%;
        height: 50px;
        border-radius: 20px;
        margin-bottom: 10px;
    }
    
    #submit {
        margin-bottom: 20px;
        margin: 0 auto;
        padding: 10px;
        background-color:#ffff66;
        height: 50px;
        width: 100px;
        border: 1px solid black;
        border-radius: 20px;
        text-decoration: none;
        color: black;
        text-align: center;
    }
    .pageImg {
        text-align: center;
        width: 100%;
        height: 250px;
        padding-bottom: 50px;
        margin: auto;
    }
    
</style>

<img src="images/wishbanner3.jpg" class="pageImg">
<div class="pageTitle">
    Make a Wish!
</div>

<form class="wishForm" method="POST" action="finalPost.php">
    <div id="wish-form">
        <input type="text" id="name" name="name" value="" placeholder="Wish Name" required/><br/>
        <input type="text" id="price" name="price" value="" placeholder="Price" required/><br/>
        <input type="text" id="url" name="url" value="" placeholder="Photo (Paste Image Address)"/><br/>
        <input type="text" id="location" name="location" value="" placeholder="Where To Get It (URL)" required/><br/>
        <textarea id="details" name="details" placeholder="Details"></textarea><br/>
        <input type="text" id="wisher" name="wisher" value="" placeholder="Who Wants It?" required/><br/>
        
		<input type="submit" id="submit" value="Wish!" />
            </div>
	</form>

