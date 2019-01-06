<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 06/01/2019
 * Time: 21:38
 */

include('../config/connection.php');

if (isset($_POST['kode']) && isset($_POST['nama']) && $_POST['stok'] && $_POST['harga']) {

    $id = $_POST['id'];
    $stmt = $connection->prepare("UPDATE barang SET kode=?,nama=?,stok=?,harga=? WHERE id=$id");
    $data = array(
        $_POST['kode'],
        $_POST['nama'],
        $_POST['stok'],
        $_POST['harga']
    );
    $result = $stmt->execute($data);

    if ($result) {
        echo "Data Berhasil di Edit";
    } else {
        echo "Gagal Di Edit";
    }

} else {
    echo "Tidak Boleh Kosong";
}