<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 06/01/2019
 * Time: 21:45
 */

include('../config/connection.php');

if (isset($_POST['delete'])) {

    $id = $_GET['id'];
    $stmt = $connection->prepare("DELETE FROM barang WHERE id=$id");
    $result = $stmt->execute();

    if ($result) {
        echo "Barang Berhasil di Delete";
    } else {
        echo "Barang Gagal di Delete";
    }
} else {
    echo "Error!";
}



