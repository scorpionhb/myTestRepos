<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 07/11/2016
 * Time: 15:00
 */
session_start();
if (isset($_SESSION['username'])) {
    unset($_SESSION['username']);
}
header("location:./");
?>