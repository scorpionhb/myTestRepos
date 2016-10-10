<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/10/2016
 * Time: 22:12
 */
?>

<?php
    define('DB_SERVER', 'eu-cdbr-azure-north-e.cloudapp.net');
    define('DB_USERNAME', 'bd4c8d83d7aa86');
    define('DB_PASSWORD', 'fb9b68c2');
    define('DB_DATABASE', 'hristo_db');

    $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
?>
