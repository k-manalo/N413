


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<style>
    .navbar {
        background-color: #99ffff;
        font-family: 'Righteous', cursive;
    }
    .navbar-brand {
        color: black;
        font-family: inherit;
    }
    #home_link {
        color: black;
    }
    #wishes_link {
        color: black;
    }
    #profile_link {
        color: black;
    }
    #logout_link {
        color: black;
    }
    
</style>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
            <title>Wishing Well</title>
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
            <script src="js/jquery-3.4.1.min.js" type="application/javascript"></script>
            <script src="js/bootstrap.min.js" type="application/javascript"></script>
            <script src="js/bootstrap.min.js.map" type="application/javascript"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
             <a class="navbar-brand" href="home.php">Wishing Well</a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                   
                  <ul class="navbar-nav">
                      <?php 
                            session_start();
                            if(isset($_SESSION["user_id"])){
                               $user_id = $_SESSION["user_id"];
                               
                      echo '
                          
                                <li id="home_item" class="nav-item">
                                    <a id="home_link" class="nav-link" href="home.php">Browse <span class="sr-only">(current)</span></a>
                                </li>
                                <li id="wishes_item" class="nav-item">
                                    <a id="wishes_link" class="nav-link" href="wishes.php">My Wishes</a>
                                </li>                           
                                <li id="profile_item" class="nav-item">
                                    <a id="profile_link" class="nav-link" href="profile.php">Profile</a>
                                </li>
                                <li id="logout_item" class="nav-item">
                                    <a id="logout_link" class="nav-link" href="index.php">Logout</a>
                                </li>';
                                }else{
                                echo '        
                                    <li id="login_item" class="nav-item">
                                        <a id="login_link" class="nav-link" href="login.php">Login</a>
                                    </li>';
                                }
                        ?>
                     
                  </ul>
               </div>
            </nav>
    </body>
</html>
