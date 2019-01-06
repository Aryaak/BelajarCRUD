<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar CRUD - Tambah Barang</title>
</head>
<body>
<form action="proses/tambah.php" method="post">
    <input type="text" name="kode" placeholder="Kode Barang">
    <input type="text" name="nama" placeholder="Nama Barang">
    <input type="number" name="stok" placeholder="Stok Barang">
    <input type="number" name="harga" placeholder="Harga Barang">
    <button type="submit">Tambah Barang</button>
</form>
</body>
</html>