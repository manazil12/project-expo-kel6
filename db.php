<?php
$host = "localhost";
$db   = "beasiswa";
$user = "root";      // Secara default MAMP menggunakan "root"
$pass = "root";      // Pada MAMP biasanya passwordnya "root"
$port = "8888";      // Port MySQL default di MAMP biasanya 8888

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
