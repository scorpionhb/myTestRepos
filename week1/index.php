<?php
/**
 * Created by PhpStorm.
 * User: 1405564
 * Date: 03/10/2016
 * Time: 14:43
 */
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
        <head>
            <title>Hellooo ma' friend!</title>
        </head>
        <body>
            <p>
                <?php
                    echo "Hello World!";
                    echo "<p>Hello," . " " . "world" . "!!</p>";
                    echo 5*7 . "<br>";
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
            <p>
                <?php
                    $myArray = array("do", "re", "mi");
                    echo $myArray[0];
                    $myArray[1] = "la";
                ?>
            </p>
            <p>
<!--                do-while loop-->
                <?php
                    $specs = 7;
                    $mugs = 7;
                    $rolls = 7;
                    $count = 1;
                    do{
                        $todayGood = rand(0, 2);
                        if($todayGood == 0){
                            print "On the " . $count . " of the month specs are available<br>";
                            $specs--;
                            //print "Specs: " . $specs . " mugs: " . $mugs . " rolls: " . $rolls . "<br>";
                        }
                        if($todayGood == 1){
                            print "On the " . $count . " of the month mugs are available<br>";
                            $mugs--;
                            //print "Specs: " . $specs . " mugs: " . $mugs . " rolls: " . $rolls . "<br>";
                        }
                        if($todayGood == 2){
                            print "On the " . $count . " of the month sausage rolls are available<br>";
                            $rolls--;
                            //print "Specs: " . $specs . " mugs: " . $mugs . " rolls: " . $rolls . "<br>";
                        }
                        $count++;
                    }while($specs !== 0 && $mugs !== 0 && $rolls !== 0);
                    echo "No more goods are available this month. Sorry. "
                ?>
            </p>
            <p>
                <?php
                //functions testing
                function award($x, $y, $z){
                    print $x*$y*$z*$x*$y*$z;
                }

                function wanted($name, $specs, $mugs, $rolls){

                    echo "Wanted: " . $name . "<br>";
                    echo "Known to be in possession of the following items:" . "<br>";
                    echo "Specs: (" . $specs . ")<br>";
                    echo "Mugs: (" . $mugs . ")<br>";
                    echo "Sausage rolls (" . $rolls . ")<br>";
                    echo "Award for capture: $";
                    echo (award($specs, $mugs, $rolls))*5 . "<br>";
                }

                wanted("Hristo Hristov", 2, 1, 2);
                ?>
            </p>



        </body>

</html>

