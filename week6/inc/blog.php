<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 02/11/2016
 * Time: 15:13
 */

    include (scripts/dbConnect.php);
    include (scripts/header.php);

    echo "
        <main>
        <h2>Blog Article</h2>
        <p>Below is a list of all blog articles</p>
        <ul>
    ";

    $sql = "SELECT * FROM blogArticles ";
    $result = $db->query($sql);
    while ($row = $result->fetch_array()){
        $articleID = $row['articleID'];
        $articleName = $row['articleName'];
        $articleAuthor = $row['articleAuthor'];

        echo "<li><a href='blog/{$articleID}'>{$articleName}</a> by {$articleAuthor}</li>";
    }

    echo "</main>";
    include ("scripts/footer.php");

?>

