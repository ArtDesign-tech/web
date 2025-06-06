<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'db_kantin_telkom');

$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
$conn->set_charset("utf8");

function getAllBarang($db) {
    $result = $db->query("SELECT barang_id, nama_barang, harga_barang, stok_barang FROM barang WHERE stok_barang > 0 ORDER BY barang_id ASC"); // Urutkan agar pembagian konsisten
    return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
}

function saveMessage($db, $nama, $email, $pesan) {
    $stmt = $db->prepare("INSERT INTO messages (nama, email, pesan) VALUES (?, ?, ?)");
    if (!$stmt) return false;
    $stmt->bind_param("sss", $nama, $email, $pesan);
    $success = $stmt->execute();
    $stmt->close();
    return $success;
}   
?>
