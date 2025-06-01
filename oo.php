<?php
define('server', 'localhost');
define('username', 'root');
define('password', '');
define('database', 'db_kantin_telkom');

$conn = new mysqli(server,username,password, database);

if ($conn->connect_error){
    die("koneksi gagal:". $conn->connect_error);
}
$conn->set_charset("utf8");

function getAllBarang($db){
    $result = $db->query("SELECT barang_id, nama_barang, harga_barang, stok_barang FROM barang WHERE stok_barang > 0 ORDER BY barang)id ASC");
}
?>
