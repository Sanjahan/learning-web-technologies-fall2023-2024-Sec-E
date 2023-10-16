<?php 

    if(isset($_POST['dd'])&&isset($_POST['mm'])&&isset($_POST['yyyy'])){
        echo "DATE OF BIRTH: {$_POST['dd']}/{$_POST['mm']}/{$_POST['yyyy']}";
        
       
    }
?>