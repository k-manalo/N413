<?php
        $dbhost = 'localhost';
        $dbuser = 'kmanalo';
        $dbpwd  = 'gwendoline rigel frightfully';
        $dbname = 'kmanalo_db';
        $link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);
        if (!$link) { 
            die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error()); 
            
        }
?>
