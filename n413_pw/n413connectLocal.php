<?php


            $dbhost = 'localhost:3306';
            $dbuser = 'root';
            $dbpwd  = '';
            $dbname = 'ampjam_db';
            $link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);
            if (!$link) { die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error()); }

