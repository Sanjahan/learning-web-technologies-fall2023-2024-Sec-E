<?php 

    if(isset($_REQUEST['Email'])){
        $email = $_REQUEST['Email'];
        echo $email;
       
    }
?>

<html>
    <head>

        <title>Email</title>
    </head>


    <body>
        
    <form action="" method="post">
        <fieldset style="width:30%">
            <legend>EMAIL</legend> <br>
        
            <input type="text" name="Email" value="<?php 

if(isset($_REQUEST['Email']))
{
    $email = $_REQUEST['Email'];
    echo $email;
   
}
?>" /> <br>
            <hr>
            <input type="submit" name="" value="Submit" /> <br>
            
        </fieldset>
    </form>
    </body>

</html>