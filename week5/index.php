<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 24/10/2016
 * Time: 14:19
 */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Index page</title>
    </head>

    <body>
    <?php
    if($username != "username" && $password != "password"){
        echo "Wrong credentials!";
        echo "SkandaY sa gospodi!";
    }
    ?>
        <form action="checkLogin.php" method="post">
            <label>Name:</label><br>
            <input type="text" name="name"><br>
            <label>Passoword:</label><br>
            <input type="password" name="password"><br>
            <input type="submit" name="submit" value="Log In">
        </form>
    </body>


</html>
