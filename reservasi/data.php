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

// Mengambil parameter sort dari URL
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'tanggal_mulai';
$order = isset($_GET['order']) ? $_GET['order'] : 'ASC';

// Validasi nilai sort dan order
$valid_sort_columns = ['tanggal_mulai'];
if (!in_array($sort, $valid_sort_columns)) {
    $sort = 'tanggal_mulai';
}
if ($order != 'ASC' && $order != 'DESC') {
    $order = 'ASC';
}

// Mengambil data dari tabel reservasi sesuai dengan username yang login saat ini
$sql = "SELECT * FROM reservasi WHERE username = ? ORDER BY $sort $order";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $loggedInUsername);
$stmt->execute();
$result = $stmt->get_result();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Reservasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Data Reservasi</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Nama Penyewa</th>
                    <th>
                        <a href="?sort=tanggal_mulai&order=<?php echo $order == 'ASC' ? 'DESC' : 'ASC'; ?>">
                            Tanggal Mulai
                        </a>
                    </th>
                    <th>Tanggal Selesai</th>
                    <th>Status</th>
                    <th>Pendopo</th>
                    <th>Ruang Baca</th>
                    <th>Taman Bermain</th>
                    <th>Total Bayar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Output data setiap baris
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . htmlspecialchars($row['id']) . "</td>
                                <td>" . htmlspecialchars($row['username']) . "</td>
                                <td>" . htmlspecialchars($row['nama_penyewa']) . "</td>
                                <td>" . htmlspecialchars($row['tanggal_mulai']) . "</td>
                                <td>" . htmlspecialchars($row['tanggal_selesai']) . "</td>
                                <td>" . htmlspecialchars($row['status']) . "</td>
                                <td>" . ($row['pendopo'] ? 'Yes' : 'No') . "</td>
                                <td>" . ($row['ruang_baca'] ? 'Yes' : 'No') . "</td>
                                <td>" . ($row['taman_bermain'] ? 'Yes' : 'No') . "</td>
                                <td>Rp " . number_format($row['total_bayar'], 0, ',', '.') . "</td>
                                <td>";
                        if ($row['status'] == 'Pending') {
                            echo "<a href='edit_reservation.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a> ";
                            echo "<a href='delete_reservation.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Hapus</a>";
                        } elseif ($row['status'] == 'Acc') {
                            echo "<a href='upload_payment.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Konfirmasi Pembayaran</a>";
                        } else {
                            echo "N/A";
                        }
                        echo "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='11' class='text-center'>No data available</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
