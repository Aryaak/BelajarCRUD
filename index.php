<?php
    include ('config/connection.php');

    $stmt = $connection->prepare("SELECT * FROM barang");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar CRUD - List Barang</title>
</head>
<body>
<table style="width:50%">
    <tr>
        <th>Id</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Action</th>
    </tr>

    <?php foreach ($result as $key => $data) { ?>
        <tr>
            <td><?php echo $key+1 ?></td>
            <td><?php echo $data['kode'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['stok'] ?></td>
            <td><?php echo $data['harga'] ?></td>
            <td>
                <a href="edit.php?id=<?php echo $data['id'] ?>">Edit</a>
                <form action="proses/delete.php?id=<?php echo $data['id']?>" method="post">
                    <button type="submit" name="delete">Delete</button>
                </form>
            </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>