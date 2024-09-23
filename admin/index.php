<?php
session_start();
if ($_SESSION['level'] !== 'admin') {
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

// Mengambil semua data dari tabel reservasi
$sql = "SELECT * FROM reservasi ORDER BY $sort $order";
$result = $conn->query($sql);

// Fungsi untuk mengupdate status reservasi
if (isset($_POST['update_status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];
    
    $update_sql = "UPDATE reservasi SET status = ? WHERE id = ?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("si", $status, $id);
    $stmt->execute();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Fungsi untuk konfirmasi pembayaran dan ubah status menjadi "Selesai"
if (isset($_POST['confirm_payment'])) {
    $id = $_POST['id'];
    
    $update_sql = "UPDATE reservasi SET status = 'Selesai' WHERE id = ?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

?>

<?php include '../layout/headerlogin.html'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Reservasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Data Reservasi</h1>
        <div class="row">
<!-- Card untuk Jumlah Reservasi Masuk -->
<div class="col-md-6 mb-3">
    <div class="card h-100 bg-primary text-white">
        <div class="card-body">
            <h5 class="card-title">Jumlah Reservasi Masuk</h5>
            <p class="card-text"><?php echo $result->num_rows; ?></p>
        </div>
    </div>
</div>
<!-- Card untuk Jumlah Reservasi Ditolak -->
<div class="col-md-6 mb-3">
    <div class="card h-100 bg-danger text-white">
        <div class="card-body">
            <h5 class="card-title">Jumlah Reservasi Ditolak</h5>
            <?php
            $query_reservasi_ditolak = "SELECT COUNT(*) AS total_ditolak FROM reservasi WHERE status = 'Ditolak'";
            $result_reservasi_ditolak = $conn->query($query_reservasi_ditolak);
            $row_reservasi_ditolak = $result_reservasi_ditolak->fetch_assoc();
            ?>
            <p class="card-text"><?php echo $row_reservasi_ditolak['total_ditolak']; ?></p>
        </div>
    </div>
</div>
<!-- Card untuk Jumlah Reservasi Diterima -->
<div class="col-md-4 mb-3">
    <div class="card h-100 bg-success text-white">
        <div class="card-body">
            <h5 class="card-title">Jumlah Reservasi Diterima</h5>
            <?php
            $query_reservasi_diterima = "SELECT COUNT(*) AS total_diterima FROM reservasi WHERE status = 'Acc'";
            $result_reservasi_diterima = $conn->query($query_reservasi_diterima);
            $row_reservasi_diterima = $result_reservasi_diterima->fetch_assoc();
            ?>
            <p class="card-text"><?php echo $row_reservasi_diterima['total_diterima']; ?></p>
        </div>
    </div>
</div>
<!-- Card untuk Jumlah Pembayaran -->
<div class="col-md-4 mb-3">
    <div class="card h-100 bg-info text-white">
        <div class="card-body">
            <h5 class="card-title">Total Pembayaran</h5>
            <?php
            $query_total_pembayaran = "SELECT SUM(total_bayar) AS total_pembayaran FROM reservasi WHERE status != 'Ditolak'";
            $result_total_pembayaran = $conn->query($query_total_pembayaran);
            $row_total_pembayaran = $result_total_pembayaran->fetch_assoc();
            ?>
            <p class="card-text">Rp <?php echo number_format($row_total_pembayaran['total_pembayaran'], 0, ',', '.'); ?></p>
        </div>
    </div>
</div>
<!-- Card untuk Jumlah Pembayaran Diterima -->
<div class="col-md-4 mb-3">
    <div class="card h-100 bg-warning text-dark">
        <div class="card-body">
            <h5 class="card-title">Total Pembayaran Diterima</h5>
            <?php
            $query_pembayaran_diterima = "SELECT SUM(total_bayar) AS total_pembayaran_diterima FROM reservasi WHERE status = 'Selesai'";
            $result_pembayaran_diterima = $conn->query($query_pembayaran_diterima);
            $row_pembayaran_diterima = $result_pembayaran_diterima->fetch_assoc();
            ?>
            <p class="card-text">Rp <?php echo number_format($row_pembayaran_diterima['total_pembayaran_diterima'], 0, ',', '.'); ?></p>
        </div>
    </div>
</div>

        
        <!-- Tabel Data Reservasi -->
        <div class="mt-5">
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
                        <th>Bukti Pembayaran</th>
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
                                    
                            // Tampilkan link bukti pembayaran jika status 'Proses' atau 'Selesai'
                            if ($row['status'] == 'Proses' || $row['status'] == 'Selesai') {
                                echo "<a href='../reservasi/uploads/" . $row['bukti_transfer'] . "' target='_blank'>Lihat Bukti</a>";
                            } else {
                                echo "N/A";
                            }
                            
                            echo "</td><td>";
                            
                            // Tombol aksi terima dan tolak
                            if ($row['status'] == 'Pending') {
                                echo "<form method='post' style='display:inline-block;'>
                                        <input type='hidden' name='id' value='" . $row['id'] . "'>
                                        <input type='hidden' name='status' value='Acc'>
                                        <button type='submit' name='update_status' class='btn btn-success btn-sm'>Terima</button>
                                      </form> ";
                                echo "<form method='post' style='display:inline-block;'>
                                        <input type='hidden' name='id' value='" . $row['id'] . "'>
                                        <input type='hidden' name='status' value='Ditolak'>
                                        <button type='submit' name='update_status' class='btn btn-danger btn-sm'>Tolak</button>
                                      </form>";
                            } elseif ($row['status'] == 'Proses') {
                                echo "<form method='post' style='display:inline-block;'>
                                        <input type='hidden' name='id' value='" . $row['id'] . "'>
                                        <button type='submit' name='confirm_payment' class='btn btn-primary btn-sm'>Konfirmasi Pembayaran</button>
                                      </form>";
                            } else {
                                echo "N/A";
                            }
                            
                            echo "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='12' class='text-center'>No data available</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
</body>
</html>

<?php
$conn->close();
?>
