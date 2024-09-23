<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION['username'])) {
        header("Location: ../login.html");
        exit();
    }

    $username = $_SESSION['username'];
    $postId = $_POST['post_id'];
    $replyContent = $_POST['replyContent'];

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

    // Prepare dan execute query untuk menyimpan reply baru ke dalam tabel replies
    $sql = "INSERT INTO replies (post_id, username, content, created_at) VALUES (?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $postId, $username, $replyContent);

    if ($stmt->execute()) {
        // Jika berhasil disimpan, redirect kembali ke halaman post_details.php
        header("Location: post_details.php?id=" . $postId);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
} else {
    // Jika akses bukan dari metode POST, redirect atau lakukan tindakan sesuai kebijakan
    header("Location: index.php"); // Ganti dengan halaman yang sesuai jika metode akses bukan POST
}
?>
