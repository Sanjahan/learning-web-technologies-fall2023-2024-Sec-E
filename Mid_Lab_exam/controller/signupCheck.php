<?php 
    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    

    if($username == "" || $password == "" || $email == "" ){
        echo "null username/password/email!";
    }else{
        $user = [
                    'username'=> $username, 
                    'password'=>$password, 
                    
                ];
        
        $_SESSION['user'] = $user;
        header('location: ../view/login.php');
    }
    ?>