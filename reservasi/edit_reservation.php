<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

$loggedInUsername = $_SESSION['username'];
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

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $reservationId = $_GET['id'];

    // Mengambil data reservasi berdasarkan ID dan username
    $sql = "SELECT * FROM reservasi WHERE id = ? AND username = ? AND status = 'Pending'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $reservationId, $loggedInUsername);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $reservation = $result->fetch_assoc();
    } else {
        echo "Reservasi tidak ditemukan atau tidak dapat diedit.";
        exit();
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $reservationId = $_POST['id'];
    $namaPenyewa = $_POST['nama_penyewa'];
    $tanggalMulai = $_POST['tanggal_mulai'];
    $tanggalSelesai = $_POST['tanggal_selesai'];
    $pendopo = isset($_POST['pendopo']) ? 1 : 0;
    $ruangBaca = isset($_POST['ruang_baca']) ? 1 : 0;
    $tamanBermain = isset($_POST['taman_bermain']) ? 1 : 0;

    // Menghitung total biaya
    $totalHari = (strtotime($tanggalSelesai) - strtotime($tanggalMulai)) / (60 * 60 * 24) + 1;
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

    // Mengupdate data reservasi
    $sql = "UPDATE reservasi SET nama_penyewa = ?, tanggal_mulai = ?, tanggal_selesai = ?, pendopo = ?, ruang_baca = ?, taman_bermain = ?, total_bayar = ? WHERE id = ? AND username = ? AND status = 'Pending'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssiiisis", $namaPenyewa, $tanggalMulai, $tanggalSelesai, $pendopo, $ruangBaca, $tamanBermain, $totalBayar, $reservationId, $loggedInUsername);

    if ($stmt->execute()) {
        echo "Reservasi berhasil diperbarui.";
    } else {
        echo "Gagal memperbarui reservasi.";
    }

    $stmt->close();
    $conn->close();

    header("Location: data.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reservasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Edit Reservasi</h1>
        <form action="edit_reservation.php" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($reservation['id']); ?>">
            <div class="form-group">
                <label for="nama_penyewa">Nama Penyewa</label>
                <input type="text" class="form-control" id="nama_penyewa" name="nama_penyewa" value="<?php echo htmlspecialchars($reservation['nama_penyewa']); ?>" required>
            </div>
            <div class="form-group">
                <label for="tanggal_mulai">Tanggal Mulai</label>
                <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="<?php echo htmlspecialchars($reservation['tanggal_mulai']); ?>" required>
            </div>
            <div class="form-group">
                <label for="tanggal_selesai">Tanggal Selesai</label>
                <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="<?php echo htmlspecialchars($reservation['tanggal_selesai']); ?>" required>
            </div>
            <div class="form-group">
                <label for="pendopo">Pendopo</label>
                <input type="checkbox" id="pendopo" name="pendopo" <?php echo $reservation['pendopo'] ? 'checked' : ''; ?>>
            </div>
            <div class="form-group">
                <label for="ruang_baca">Ruang Baca</label>
                <input type="checkbox" id="ruang_baca" name="ruang_baca" <?php echo $reservation['ruang_baca'] ? 'checked' : ''; ?>>
            </div>
            <div class="form-group">
                <label for="taman_bermain">Taman Bermain</label>
                <input type="checkbox" id="taman_bermain" name="taman_bermain" <?php echo $reservation['taman_bermain'] ? 'checked' : ''; ?>>
            </div>
            <button type="submit" class="btn btn-primary">Update Reservasi</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
