<?php
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $level = 'user'; // Default level untuk pengguna baru

    // Hash password sebelum menyimpannya ke database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Menambahkan pengguna baru ke tabel user
    $sql_user = "INSERT INTO user (username, password, level) VALUES (?, ?, ?)";
    $stmt_user = $conn->prepare($sql_user);
    $stmt_user->bind_param("sss", $username, $hashed_password, $level);

    // Menambahkan data pengguna baru ke tabel data_user
    $sql_data_user = "INSERT INTO data_user (username, nama, email) VALUES (?, ?, ?)";
    $stmt_data_user = $conn->prepare($sql_data_user);
    $stmt_data_user->bind_param("sss", $username, $name, $email);

    if ($stmt_user->execute() && $stmt_data_user->execute()) {
        // Redirect ke halaman login setelah registrasi berhasil
        header("Location: login.html");
        exit();
    } else {
        echo "Error: " . $stmt_user->error . " " . $stmt_data_user->error;
    }

    $stmt_user->close();
    $stmt_data_user->close();
}
$conn->close();
?>
