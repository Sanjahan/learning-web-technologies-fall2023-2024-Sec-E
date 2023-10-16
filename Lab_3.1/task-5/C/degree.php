<?php

if (isset($_REQUEST['Degree'])) {
    $degree = $_REQUEST['Degree'];
    echo $degree;
}
?>

<html>

<head>

    <title>Degree</title>
</head>


<body>

    <form action="" method="post" enctype="">

        <fieldset style="width: 400px;">
            <legend>Degree</legend>


            <input type="checkbox" name="Degree" value="O' Levels" <?php if(isset($gender) && $gender == "O' Levels") echo "checked"; ?>> O' Levels
            <input type="checkbox" name="Degree" value="A' Levels" <?php if(isset($gender) && $gender == "A' Levels") echo "checked"; ?>> A' Levels
            <input type="checkbox" name="Degree" value="BSc"  <?php if(isset($gender) && $gender == "BSc") echo "checked"; ?>> BSc 
            <input type="checkbox" name="Degree" value="MSc" <?php if(isset($gender) && $gender == "BSc") echo "checked"; ?>> MSc 
            <br>

            <hr>
            <input type="submit" name="Submit" value="Submit">


        </fieldset>
        <br>

    </form>

</body>

</html>