<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 06/01/2019
 * Time: 21:22
 */

include('../config/connection.php');

if (isset($_POST['kode']) && isset($_POST['nama']) && $_POST['stok'] && $_POST['harga']) {

    $stmt = $connection->prepare("INSERT INTO barang(kode,nama,stok,harga) VALUES (?,?,?,?)");
    $data = array(
        $_POST['kode'],
        $_POST['nama'],
        $_POST['stok'],
        $_POST['harga']
    );
    $result = $stmt->execute($data);

    if (!$result) {
        echo "Gagal Menambahkan Barang";
    } else {
        echo "Barang Sukses Di Tambahkan";
    }

} else {
    echo "Tidak Boleh Kosong";
}