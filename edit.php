<?php
include('config/connection.php');

$id = $_GET['id'];
$stmt = $connection->prepare("SELECT * FROM barang WHERE id=$id");
$stmt->execute();
$data = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar CRUD</title>
</head>
<body>
<form action="proses/edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
    <input type="text" name="kode" placeholder="Kode Barang" value="<?php echo $data['kode']?>">
    <input type="text" name="nama" placeholder="Nama Barang" value="<?php echo $data['nama'] ?>">
    <input type="number" name="stok" placeholder="Stok Barang" value="<?php echo $data['stok'] ?>">
    <input type="number" name="harga" placeholder="Harga Barang" value="<?php echo $data['harga'] ?>">
    <button type="submit">Edit Barang</button>
</form>
</body>
</html>