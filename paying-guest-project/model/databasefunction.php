<?php

require_once("db.php");

function adduser($user,$table){

    if(str_starts_with($user['username'],"Gu-")){
      $username=str_replace("Gu-","",$user['username']);
    } else if( str_starts_with($user['username'],"Ho-")){
        $username=str_replace("Ho-","",$user['username']);
    } else if( str_starts_with($user['username'],"Ad-")){
        $username=str_replace("Ad-","",$user['username']);
    }
    $password=$user['password'];
    $email=$user['email'];
    $phone=$user['phone'];
    $address=$user['address'];
    $name= $user['name'];
    $gender=$user['gender'];

   
    $conn=connection("localhost","root","","payin-guest-project");
    $query= "select phone from $table where  phone ='$phone'";
    $result = mysqli_query($conn, $query);
    $query2= "select username from $table where username='$username'";
    $result2=mysqli_query($conn,$query2);
    
    if( mysqli_num_rows($result)>0){
        $_SESSION['phoneErr']="true";
    }
    else if( mysqli_num_rows($result2)>0){
        $_SESSION['usernameErr']="true";

    }
    else{
        /*insert into name,email,phone,address,gender,username,password*/
        $query3=" insert into $table values('$name','$email','$phone','$address','$gender','$username','$password')";
        $result3=mysqli_query($conn,$query3);
        if($result3){
            $_SESSION['insert']="true";
        }
        
    }
 

}











?>