<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tr_rpl";

$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $pendopo = ($_POST['pendopo'] === 'true');
    $ruangBaca = ($_POST['ruangBaca'] === 'true');
    $tamanBermain = ($_POST['tamanBermain'] === 'true');

    $available = true;
    $message = '';

    // Query untuk memeriksa ketersediaan reservasi pada rentang tanggal yang dipilih
    // Ditambahkan kondisi untuk memeriksa hanya reservasi yang statusnya 'Ditolak'
    $sql = "SELECT * FROM reservasi WHERE ((tanggal_mulai BETWEEN ? AND ?) OR (tanggal_selesai BETWEEN ? AND ?) OR (? BETWEEN tanggal_mulai AND tanggal_selesai) OR (? BETWEEN tanggal_mulai AND tanggal_selesai)) AND status != 'Ditolak'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $startDate, $endDate, $startDate, $endDate, $startDate, $endDate);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $available = false;
        $message = "Maaf, reservasi tidak tersedia pada tanggal yang dipilih.";
    }

    if ($available) {
        // Hitung total biaya
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

        // Buat pesan hasil reservasi
        $message = "Reservasi tersedia.<br>";
        $message .= "Total biaya: Rp " . number_format($totalBayar, 0, ',', '.') . "<br>";
        $message .= "Apakah Anda ingin melanjutkan dengan reservasi? <br>";
    }

    echo $message;
}

$stmt->close();
$conn->close();
?>
