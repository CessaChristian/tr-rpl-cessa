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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $reservationId = $_POST['reservation_id'];
    $fileName = $_FILES['bukti_transfer']['name'];
    $fileTmpName = $_FILES['bukti_transfer']['tmp_name'];
    $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
    $newFileName = $reservationId . "-" . $loggedInUsername . "." . $fileExt;
    $uploadDir = 'uploads/';
    $uploadFilePath = $uploadDir . $newFileName;

    if (move_uploaded_file($fileTmpName, $uploadFilePath)) {
        $sql = "UPDATE reservasi SET bukti_transfer = ?, status = 'Proses' WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $newFileName, $reservationId);
        $stmt->execute();
        // Redirect ke halaman data.php setelah berhasil upload
        header("Location: data.php");
        exit();
    } else {
        echo "Terjadi kesalahan saat mengunggah bukti transfer.";
    }
}

if (isset($_GET['id'])) {
    $reservationId = $_GET['id'];
} else {
    die("ID reservasi tidak ditemukan.");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Bukti Transfer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Upload Bukti Transfer</h1>
        <form action="upload_payment.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="bukti_transfer">Unggah Bukti Transfer:</label>
                <input type="file" class="form-control" id="bukti_transfer" name="bukti_transfer" required>
            </div>
            <input type="hidden" name="reservation_id" value="<?php echo htmlspecialchars($reservationId); ?>">
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
