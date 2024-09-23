<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan user telah login, bisa disesuaikan dengan mekanisme login yang digunakan
    if (!isset($_SESSION['username'])) {
        header("Location: login.html"); // Ganti dengan halaman login yang sesuai
        exit();
    }

    $username = $_SESSION['username'];
    $postTitle = $_POST['postTitle'];
    $postContent = $_POST['postContent'];

    // Validasi input jika diperlukan
    // Misalnya, pastikan judul dan isi post tidak kosong

    // Koneksi ke database
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "tr_rpl";

    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    // Mengecek koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare dan execute query untuk menyimpan post baru ke dalam tabel posts
    $sql = "INSERT INTO post (username, title, content, created_at) VALUES (?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $postTitle, $postContent);

    if ($stmt->execute()) {
        // Jika berhasil disimpan, redirect ke halaman forum atau halaman selesai posting
        header("Location: forum.php"); // Ganti dengan halaman yang sesuai setelah posting
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
} else {
    // Jika akses bukan dari metode POST, redirect atau lakukan tindakan sesuai kebijakan
    header("Location: forum.php"); // Ganti dengan halaman yang sesuai jika metode akses bukan POST
}
?>
