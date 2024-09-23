<?php
$servername = "localhost"; // Ganti sesuai server Anda
$username = "root";        // Ganti sesuai username Anda
$password = "";           // Ganti sesuai password Anda
$dbname = "tr_rpl";  // Ganti sesuai nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>