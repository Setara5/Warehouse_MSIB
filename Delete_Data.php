<?php
include_once 'Database.php';
include_once 'Gudang.php';

$database = new Database();
$db = $database->getConnection();

$gudang = new Gudang($db);

$gudang->id = $_POST['id'];

if($gudang->delete()) {
    echo "Gudang berhasil dihapus/di-nonaktifkan.";
} else {
    echo "Gagal menghapus/menonaktifkan gudang.";
}
?>
