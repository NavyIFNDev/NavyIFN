<?php
    $connection = mysqli_connect('localhost', 'navyifnlogin', 'Hedgehog42');
    if (!$connection){
        die("Database Connection Failed" . mysqli_error($connection));
    }
    $select_db = mysqli_select_db($connection, 'navyifnlogin');
    if (!$select_db){
        die("Database Selection Failed" . mysqli_error($connection));
    }
