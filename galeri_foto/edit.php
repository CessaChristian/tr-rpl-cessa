<?php
include 'koneksi.php';
session_start();
if ($_SESSION['level'] !== 'admin') {
    header("Location: login.html");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data foto berdasarkan ID
    $sql = "SELECT * FROM foto WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "Foto tidak ditemukan.";
        exit;
    }
} else {
    echo "ID foto tidak valid.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $deskripsiBaru = $_POST["deskripsi"];

    // Update deskripsi foto di database
    $sql = "UPDATE foto SET deskripsi = '$deskripsiBaru' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Deskripsi foto berhasil diperbarui.";
        header("Location: manage.php"); // Redirect ke halaman manajemen setelah update
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Foto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Edit Foto</h1>
        <form method="post">
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control"><?php echo $row["deskripsi"]; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>
