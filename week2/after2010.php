<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/10/2016
 * Time: 22:36
 */
?>

<!DOCTYPE html>
<html>

    <head>
        <title>After 2010</title>
    </head>

    <body>

    <?php

    //Including the database
    include("dbConnect.php");

    //Creating the query that is required for this page
    $myQuery = "SELECT * FROM marvelmovies WHERE yearRelease > '2010'";

    //Collecting the query's result
    $result = $db->query($myQuery);

    //Displaying the results
    while($row = $result->fetch_array()){
        echo "<p>$row[yearReleased] -- $row[title] -- $row[productionStudio] -- $row[notes]</p>";
        echo "<p> </p>";
    }

    ?>


    </body>

</html>
