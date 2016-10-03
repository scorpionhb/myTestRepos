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
                        print "I know you!";
                    } else {
                        print "Who are you?";
                    }
                ?>
            </p>
            <p>
                <?php
                    $numOfHobbits = 2;
                    switch($numOfHobbits){
                        case 1:
                            echo "1 sad hobbit";
                            break;
                        case 2:
                            echo "2 happy hobbits";
                            break;
                        default:
                            echo "All hobbits have gone home";
                    }

                ?>
            </p>



        </body>

</html>

