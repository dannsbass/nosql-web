<?php
require_once __DIR__.'/koneksi.php';
$db = new \SleekDB\Store("peserta",DB_DIR,$konfigurasi);
if(isset($_POST['_id'])){
    unset($_POST['submit']);
    $data = $_POST;
    $update = $db->update($data);
    header('Location: view.php');
}else{
    echo "id kosong";
}
