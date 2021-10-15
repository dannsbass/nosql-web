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
        if(isset($_POST['submit'])){
            $dataPeserta = [
                'nama' => $_POST['nama'],
                'umur' => $_POST['umur'],
                'email' => $_POST['email'],
                'asal' => $_POST['asal'],
            ];
            //masukkan data peserta ke dalam store
            $hasil = $db->insert($dataPeserta);
            echo "data berhasil disimpan<br><pre>";
            print_r($hasil);
            echo "</pre>";
        }else{ ?>
        <form method="post" action="input.php">
            Nama: <input type="text" name="nama"><br>
            Umur: <input type="text" name="umur"><br>
            Email: <input type="text" name="email"><br>
            Asal: <input type="text" name="asal"><br>
            <input type="submit" name="submit" value="kirim">
        </form>
        <?php } ?>
    </body>
</html>



<a href="view.php">Lihat data</a>