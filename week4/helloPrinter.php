<?php
/**
 * User: ACER
 * Date: 19/10/2016
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Printer</title>
    </head>

    <body>

        <?php
            $query = $_GET["query"];
            echo "Hello " . $query . "!";
            echo "<p>Hello {$query}..... !</p>"
        ?>

    </body>
</html>
