<?php
/**
 * User: ACER
 * Date: 19/10/2016
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Insert superhero</title>
    </head>

    <body>
        <?php
            include("dbConnect.php");

    /**
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "myDB";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
*/
        // sql to create table
        $sql = "CREATE TABLE 'superheroes'(
              'superheroID' int(10) NOT NULL AUTO_INCREMENT,
              'firstName' text NOT NULL,
              'lastName' text NOT NULL,
              'superPower' text NOT NULL,
              PRIMARY KEY('superheroID')
              )";

        if ($db->query($sql) === TRUE) {
            echo "Table MyGuests created successfully";
        } else {
            echo "Error creating table: " . $db->error;
        }

        $db->close();

        ?>

    </body>

</html>
