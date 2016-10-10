<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/10/2016
 * Time: 22:32
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>All Movies</title>
    </head>

    <body>

    <?php
    //Including the database for further usage
    include("dbConnect.php");

    //The SQL query to show all movies by Marvel Studios
    $sql_query = "SELECT * FROM marvelmovies WHERE productionStudio LIKE %Marvel Studios%";

    //Collecting the result of the query
    $result = $db->query($sql_query);

    //Processing the result
    while($row = $result->fetch_array()){
        echo "<p> $row[yearReleased] -- $row[title] -- $row[productionStudio] -- $row[notes]</p>";
        echo "<p> </p>";
    }

    ?>

    </body>

</html>

