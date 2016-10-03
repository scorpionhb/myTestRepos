<?php
/**
 * Created by PhpStorm.
 * User: 1405564
 * Date: 03/10/2016
 * Time: 14:43
 */
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Hellooo ma' friend!</title>
        </head>
        <body>
            <p>
                <?php
                    echo "Hello World!";
                    echo "<p>Hello," . " " . "world" . "!!</p>";
                    echo 5*7;
                    $myName = "Hristo Hristov";
                    $myAge = 20;
                    echo "<br>" . "My name is " . $myName . " and I am " . $myAge . " years old.";
                ?>
            </p>
            <p>
                <?php
                    echo "I get printed!";
                    //I do not!
                    /*
                     * dsadajidsajfdsjfksa neither do I. :(
                     */
                ?>
            </p>
            <p>
                <?php
                    $name = "Edgar";
                    if ($name == "Simon"){
                        echo "I know you!";
                    } else {
                        echo "Who are you?";
                    }
                ?>
            </p>



        </body>

</html>

