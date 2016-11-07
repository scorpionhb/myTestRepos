<?php
/**
 * Created by PhpStorm.
 * User: 1405564
 * Date: 31/10/2016
 * Time: 14:23
 */
session_start();
?>

<!DOCTYPE html>
<html land="en">
    <head>
        <meta charset="utf-8">
        <title>The Blog of Applause</title>
    </head>

    <body>
        <header>
            <h1>The Blog of Applause</h1>
            <nav>
                <ul>
                    <li><a href="index">Home Page</a></li>
                    <li><a href="blog">My Blog</a></li>
                    <li><a href="about">About Me</a></li>
                    <li><a href="contactus">Contact Me</a></li>
                    <? 
                    if (isset($_SESSION['username'])) {
                        echo "<li><a href='createarticle'>Create Article</a></li>";
                        echo "<li><a href='logout'>Logout</a></li>";
                    } else {
                        echo "<li><a href='login'>Login</a></li>";
                    }
                    ?>
                </ul>
            </nav>
        </header>
    </body>

</html>
