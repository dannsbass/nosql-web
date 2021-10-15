<?php
require_once __DIR__.'/koneksi.php';
$db = new \SleekDB\Store("peserta",DB_DIR,$konfigurasi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
</head>
<body>
    <a href="input.php">Tambah data</a>
    <table border='1' cellpadding='5'>
    <tr><td>ID</td><td>Nama</td><td>Umur</td><td>Email</td><td>Asal</td><td>Edit</td><td>Hapus</td></tr>
    <?php
    $allData = $db->findAll();
    sort($allData);
    foreach($allData as $no=>$data){
        //print_r($data['nama']);
        $nama = $data['nama'];
        $umur = $data['umur'];
        $email = $data['email'];
        $asal = $data['asal'];
        $id = $data['_id'];
        echo "<tr><td>$id</td><td>$nama</td><td>$umur</td><td>$email</td><td>$asal</td><td><a href='edit.php?id=$id'>edit</a></td><td><a href='delete.php?id=$id'>hapus</a></td></tr>";
    }
    echo "</table>";
    ?>
    <a href="input.php">Tambah data</a>
</body>
</html>