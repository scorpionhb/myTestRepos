<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 24/10/2016
 * Time: 14:28
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Check Login</title>
    </head>

    <body>
        <?php
            $username = $_POST["name"];
            $password = $_POST["password"];

            if($username == "username" && $password == "password"){
                setcookie('access_level_cookie', 'standarduser');
                header('Location: loggedIn.php');
            } else {
                echo "Wrong credentials!";
                echo "SkandaY sa gospodi!";
                header( "Refresh:5; url=http://testapphristo.azurewebsites.net/week5/index.php", true, 303);
            }


        ?>

    </body>


</html>
