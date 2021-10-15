<?php
require_once __DIR__.'/koneksi.php';
$db = new \SleekDB\Store("peserta",DB_DIR,$konfigurasi);
?>

<html>
    <head>
        <title>Input Data</title>
    </head>
    <body>
        <?php
        if(isset($_GET['id'])){
            $id = (int)abs($_GET['id']);
            $data = $db->findById($id);
            // print_r($data);
            $nama = $data['nama'];
            $umur = $data['umur'];
            $email = $data['email'];
            $asal = $data['asal'];
            $id = $data['_id']; ?>
        <form method="post" action="update.php">
            Nama: <input type="text" name="nama" value="<?=$nama?>"><br>
            Umur: <input type="text" name="umur" value="<?=$umur?>"><br>
            Email: <input type="text" name="email" value="<?=$email?>"><br>
            Asal: <input type="text" name="asal" value="<?=$asal?>"><br>
            <input type="hidden" name="_id" value="<?=$id?>">
            <input type="submit" name="submit" value="UPDATE">
        </form>
        <?php } ?>
    </body>
</html>