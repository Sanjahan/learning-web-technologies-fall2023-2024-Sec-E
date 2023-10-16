<?php 

    if(isset($_POST['dd'])&&isset($_POST['mm'])&&isset($_POST['yyyy'])){
        echo "DATE OF BIRTH: {$_POST['dd']}/{$_POST['mm']}/{$_POST['yyyy']}";
        
       
    }
?>


<html>
    <head>

        <title>DOB</title>
    </head>


    <body>
        
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="DOB.php" method="post">

        <fieldset style="width:30%">
            <legend>Date of Birth</legend> <br>
        
            <label for="dd" style="padding-left:15px">dd</label>
            <label for="mm" style="padding-left:30px">mm</label>
            <label for="yyyy" style="padding-left:30px">yyyy</label>
            <br>
            <input  style="width:20%" type="number" name="dd" value="<?php 

if(isset($_POST['dd'])){
    echo $_POST['dd'];
    
   
}?>" />
            <input  style="width:20%" type="number" name="mm"  value="<?php 

if(isset($_POST['mm'])){
    echo $_POST['mm'];
    
   
}?>" />
            <input  style="width:20%" type="number" name="yyyy" value="<?php 

if(isset($_POST['yyyy'])){
    echo $_POST['yyyy'];
    
   
}?>"/> <br>
            <hr>
            <input type="Submit" value="Submit" /> <br>
        </fieldset>
    </form>
    
</body>
</html>



    </body>

</html>

