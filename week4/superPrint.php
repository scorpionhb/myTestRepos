<?php
/**
 * User: ACER
 * Date: 19/10/2016
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Super Print</title>
    </head>

    <body>
        <?php
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $gender = $_POST["gender"];
            $power = $_POST["power"];
            echo "Superhero details:<br>";
            echo "$firstName " . " $lastName " . " - $gender <br> " . "Power: $power";
        ?>
    </body>

</html>