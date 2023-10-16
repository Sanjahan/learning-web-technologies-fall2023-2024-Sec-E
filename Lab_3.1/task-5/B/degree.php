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


            <input type="checkbox" name="Degree" value="O' Levels" /> O' Levels
            <input type="checkbox" name="Degree" value="A' Levels" /> A' Levels
            <input type="checkbox" name="Degree" value="BSc" /> BSc
            <input type="checkbox" name="Degree" value="MSc" /> MSc
            <br>

            <hr>
            <input type="submit" name="Submit" value="Submit">


        </fieldset>
        <br>

    </form>

</body>

</html>