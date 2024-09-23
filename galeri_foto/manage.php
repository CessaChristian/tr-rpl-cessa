<?php
include 'koneksi.php';
session_start();
if ($_SESSION['level'] !== 'admin') {
    header("Location: login.html");
    exit();
}
// Logika untuk mengedit dan menghapus foto (Anda perlu menambahkannya di sini)

$sql = "SELECT * FROM foto";
$result = $conn->query($sql);
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
        <?php include '../layout/headerlogin.html'; ?>
        </header>
        <main>
        <div class="container">
        <h1>Manajemen Foto</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo '<td><img src="' . $row["nama_file"] . '" class="img-thumbnail" width="100"></td>';
                        echo "<td>" . $row["deskripsi"] . "</td>";
                        echo "<td>";
                        echo '<a href="edit.php?id=' . $row["id"] . '" class="btn btn-warning btn-sm">Edit</a> ';
                        echo '<a href="delete.php?id=' . $row["id"] . '" class="btn btn-danger btn-sm">Hapus</a>';
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada foto.</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
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

