<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>

<body>
    <form action="" method="post">


        <fieldset style="width: 30%">
            <legend>LOGIN</legend><br>
            <label for="name">User Name:</label>
            <input type="text" id="user_name" name="user_name">

            <?php

               if (isset($_POST['user_name'])) {
                    $name = $_POST['user_name'];
                    if ($name == "") {
                        echo "Please Enter Your Name";
                    } else if (strlen($name) < 2) {

                        echo "User Name must contain at least two (2) characters";



                    } else if (preg_match('/^[a-zA-Z0-9._-]+$/', $name)) {

                        echo " ";
                    } else {
                        echo "User Name can contain alpha numeric characters, period, dash or underscore only";
                    }


                }

                ?>
            </span>

            <br><br>
            <label for="password">Password: </label>
            <input type="password" id="password" name="password">
            <span>
                <?php

                if (isset($_POST['password'])) {
                    $password = $_POST['password'];

                    $name = $_POST['password'];
                    if ($name == "") {
                        echo "null submission";
                    } else {
                        $pattern = '/^(?=.*[@#$%])[\w@#$%]{8,}$/';

                        if (preg_match($pattern, $password)) {
                            echo " ";
                        }
                        else {
                            echo "Password is not valid, Must contsin either of the following characters @,#,$,%";
                        }

                    }

                }
                

                ?>

<br><br>
            <hr>
            <input type="checkbox" id="remember me" name="remember me"> Remember Me<br><br>
            <input type="submit" value="Submit"> <a href="#">Forgot Password?</a>


        </fieldset>
    </form>


    </p>
</body>

</html>