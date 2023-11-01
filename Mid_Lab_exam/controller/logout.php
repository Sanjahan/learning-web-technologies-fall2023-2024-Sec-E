<?php

    session_start();
    unset($_SESSION['auth']);
    header('location: ../view/login.php');

?>