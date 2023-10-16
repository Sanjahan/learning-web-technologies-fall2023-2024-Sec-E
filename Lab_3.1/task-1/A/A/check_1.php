<?php

    $username = $_POST["username"];
    $password = $_POST["password"];

    
    if (!preg_match('/^[a-zA-Z0-9\.\-_]+$/', $username)) {
        echo "User name contain only alpha-numeric characters, period, dash, or underscore.";
    }
    elseif (strlen($username) < 2) {
        echo "User Name must contain at least two characters.";
    }
    elseif (strlen($password) < 8) {
        echo "Password must be at least eight characters long.";
    }
    elseif (!preg_match('/[@#$%]/', $password)) {
        echo "Password must contain at least one of the special characters (@, #, $, %).";
    }
    else {
        echo "Valid.";
        
    }

    
?>