<?php
session_start(); // Pastikan session sudah dimulai

// Pengecekan apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum login, kembalikan respons yang sesuai
    echo "Anda belum login!";
    exit();
}

// Ambil data dari POST
$name = $_POST['name'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$pendopo = ($_POST['pendopo'] === 'true') ? 1 : 0;
$ruangBaca = ($_POST['ruangBaca'] === 'true') ? 1 : 0;
$tamanBermain = ($_POST['tamanBermain'] === 'true') ? 1 : 0;

// Hitung biaya
$totalHari = strtotime($endDate) - strtotime($startDate);
$totalHari = floor($totalHari / (60 * 60 * 24)) + 1; // Menghitung hari, tambahkan 1 karena inklusif
$biayaDasar = $totalHari * 100000;
$biayaAddOns = 0;

if ($pendopo) {
    $biayaAddOns += 25000;
}
if ($ruangBaca) {
    $biayaAddOns += 25000;
}
if ($tamanBermain) {
    $biayaAddOns += 25000;
}

$totalBayar = $biayaDasar + $biayaAddOns;

// Simpan ke database (sesuaikan dengan skema tabel yang telah Anda buat)
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

// Query untuk memasukkan data reservasi
$sql = "INSERT INTO reservasi (username, nama_penyewa, tanggal_mulai, tanggal_selesai, status, pendopo, ruang_baca, taman_bermain, total_bayar) 
        VALUES ('" . $conn->real_escape_string($_SESSION['username']) . "', 
                '" . $conn->real_escape_string($name) . "', 
                '" . $conn->real_escape_string($startDate) . "', 
                '" . $conn->real_escape_string($endDate) . "', 
                'Pending', 
                '" . $pendopo . "', 
                '" . $ruangBaca . "', 
                '" . $tamanBermain . "', 
                '" . $totalBayar . "')";

if ($conn->query($sql) === TRUE) {
    echo "Reservasi berhasil diproses!";
} else {
    echo "Terjadi kesalahan saat memproses reservasi: " . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
