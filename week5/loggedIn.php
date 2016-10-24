<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 24/10/2016
 * Time: 14:40
 */
?>

<!DOCTYPE html>
<html lang="en">
    <head lang="en">
        <meta charset="UTF-8">
        <title>Logged In</title>
    </head>

    <body>
        <?php
            session_start();
            $accesslevel = $_COOKIE['access_level_cookie'];

            displayAccessLevelInformation($accesslevel);

            function displayAccessLevelInformation($accesslevel){

                if($accesslevel == "standarduser"){
                    echo "<p style = \background-color: green\"> You are currently logged in as a standard user</p>";
                }
                elseif($accesslevel == "root"){
                    echo "<p style = \background-color: red\"> You are currently logged in as a root user</p>";
                    echo "<p style = \background-color: red\"> You now have acces to NA SIMETO MAIKATA!</p>";
                }
            }



        ?>
    </body>


</html>

