<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 07/11/2016
 * Time: 14:39
 */
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    include ("scripts/header.php");
    ?>
    <main>
        <form action="login" method="post">
            <input type="text" name="username" placeholder="username"></br>
            <input type="password" name="password" placeholder="password"></br>
            <p><input type="submit" value="Submit"></p>
        </form>
    </main>
    <?php

    include ("scripts/footer.php");
}   elseif ($_SERVER['REQUEST_METHOD'] === 'POST'){

        include ("scripts/dbConnect.php");

    $username = $_POST["username"];
    $password = $_POST["password"];

    function checklogin($username, $password, $db){
        $sql = "SELECT * FROM users WHERE username='" . $username . "' and password='" . $password ."'";
        $result = $db->query($sql);
        while ($row = $result->fetch_array()) {
            return true;
        }
        return false;
    }

    if (checklogin($username, $password, $db)) {
        session_start();
        $_SESSION['username'] = $username;
        header("location: http://testapphristo.azurewebsites.net/week6/index.php");
    } else {
        header("location: http://testapphristo.azurewebsites.net/week6/index.php");
    }

} else {
    print('whoops');
}

?>