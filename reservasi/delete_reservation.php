<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

$loggedInUsername = $_SESSION['username'];

if (isset($_GET['id'])) {
    $reservationId = $_GET['id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tr_rpl";

    // Membuat koneksi ke database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Mengecek koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Menghapus reservasi berdasarkan ID dan username
    $sql = "DELETE FROM reservasi WHERE id = ? AND username = ? AND status = 'Pending'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $reservationId, $loggedInUsername);

    if ($stmt->execute()) {
        echo "Reservasi berhasil dihapus.";
    } else {
        echo "Gagal menghapus reservasi.";
    }

    $stmt->close();
    $conn->close();

    header("Location: data.php");
    exit();
} else {
    echo "ID reservasi tidak ditemukan.";
}
?>
