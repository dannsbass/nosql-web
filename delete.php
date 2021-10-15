<?php
require_once __DIR__.'/koneksi.php';
$db = new \SleekDB\Store("peserta",DB_DIR,$konfigurasi);
if(isset($_GET['id'])){
    $id = (int)abs($_GET['id']);
    echo "Yakin mau menghapus no. $id?"; 
    $data = $db->findById($id);
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    ?>
    <form action="delete.php" method="post">
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" value="ya" name="submit"><input type="submit" value="tidak" name="submit">
    </form>
    <?php
return;
}
if(isset($_POST['submit']) and isset($_POST['id'])){
    if($_POST['submit'] == 'ya'){
        $id = $_POST['id'];
        $del = $db->deleteById($id);
        if(true === $del){
            header('Location: view.php');
        }else{
            echo "not deleted";
        }
    }else{
        header('Location: view.php');
    }
}else{
    echo "tidak ada post submit atau post id";
}
