<?php 

if(isset($_POST['gender'])){
    echo $_POST['gender'];
    
   
}
?>


<html>
    <head>

        <title>GENDER</title>
    </head>


    <body>
        
    <!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <form action="gender.php" method="post">
        <fieldset style="width:25%">
            <legend>GENDER</legend> <br>
         
        <input type="radio" name="gender" value="Male" /> Male
        <input type="radio" name="gender" value="Female" /> Female
        <input type="radio" name="gender" value="Other" /> Other <br>
        <br>
        <hr>
        <input type="submit" name="" value="Submit" /> <br>
        </fieldset>
    </form>
    
    
</body>
</html>



    </body>

</html>
