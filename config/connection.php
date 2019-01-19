<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 06/01/2019
 * Time: 21:14
 */

$host = "localhost";
$dbname = "crudbarang";
$username = "root";
$password = "";

$con = "mysql:host={$host};dbname={$dbname}";
$connection = new PDO($con, $username, $password);

?>
