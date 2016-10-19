<?php
/**
 * User: ACER
 * Date: 19/10/2016
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>

    <body>
        <h3>Please fill in  the form:</h3>
        <form action="superPrint.php" method="post">
            <label>First name:</label><input type="text" name="firstName">
            <label>Last name:</label><input type="text" name="lastName"><br>
            <label>Gender:</label><br>
            <input type="radio" name="gender" value="male">Male<br>
            <input type="radio" name="gender" value="female">Female<br>
            <input type="text" name="power"><br>
            <input type="submit" value="Go!"><br>
        </form>
    </body>

</html>

