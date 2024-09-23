<?php include 'koneksi.php'; 
session_start();
if ($_SESSION['level'] !== 'admin') {
    header("Location: login.html");
    exit();
}
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Galeri Foto</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    </head>

    <body>
        <header>
            <?php include '../layout/headerlogin.html'; ?>
        </header>
        <main>
            <div class="container">
                <h1>Galeri Foto</h1>

                <div class="mb-3">
                    <a href="upload.php" class="btn btn-primary">Upload Foto</a>
                    <a href="manage.php" class="btn btn-secondary">Manage Foto</a>
                </div> 

                <div class="row">
                    <?php
                    $sql = "SELECT * FROM foto";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo '<div class="col-md-4">';
                            echo '<div class="card mb-4">';
                            echo '<img src="' . $row["nama_file"] . '" class="card-img-top" alt="Foto">';
                            echo '<div class="card-body">';
                            echo '<p class="card-text">' . $row["deskripsi"] . '</p>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo "Tidak ada foto.";
                    }
                    $conn->close();
                    ?>
                </div>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>
