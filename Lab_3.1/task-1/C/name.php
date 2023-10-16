<?php 

    if(isset($_REQUEST['name']))
    {
        $name = $_REQUEST['name'];
        echo $name;
       
    }
?>

<html>
    <head>
          <title>Name</title>
    </head>


    <body> 
        <form action="" method="post">
        
        <fieldset style="width:30%">
            <legend>NAME</legend> <br>
           
             <input type="text" name="name" value="<?php 

if(isset($_REQUEST['name']))
{
    $name = $_REQUEST['name'];
    echo $name;
   
}
?>" /> <br>
             <hr>
            <input type="submit" name="" value="Submit" />
        

        </fieldset>
        </form>


    </body>

</html>

