<?php
include 'koneksi.php';
session_start();
if ($_SESSION['level'] !== 'admin') {
    header("Location: login.html");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil nama file foto dari database
    $sql = "SELECT nama_file FROM foto WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $namaFile = $row["nama_file"];

        // Hapus foto dari folder
        if (file_exists($namaFile)) {
            unlink($namaFile);
        }

        // Hapus data foto dari database
        $sql = "DELETE FROM foto WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            echo "Foto berhasil dihapus.";
            header("Location: manage.php"); // Redirect ke halaman manajemen setelah penghapusan
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Foto tidak ditemukan.";
    }
} else {
    echo "ID foto tidak valid.";
}
?>
