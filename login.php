<?php
session_start();
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
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Query untuk mengambil informasi user berdasarkan username
    $sql = "SELECT user.username, user.password, user.level, data_user.nama 
            FROM user 
            JOIN data_user ON user.username = data_user.username 
            WHERE user.username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Verifikasi password
        if (password_verify($pass, $hashed_password) || $pass == $hashed_password) {
            // Login berhasil
            $_SESSION['username'] = $row['username'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['level'] = $row['level'];
            
            if ($row['level'] == 'admin') {
                header("Location: admin/reservasi.php");
            } else {
                header("Location: user/index.php");
            }
            exit();
        } else {
            // Password salah
            echo "Username atau Password salah.";
        }
    } else {
        // Username tidak ditemukan
        echo "Username atau Password salah.";
    }
    $stmt->close();
}
$conn->close();
?>
