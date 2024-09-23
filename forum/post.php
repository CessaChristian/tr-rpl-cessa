<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: ../login.html"); // Ganti dengan halaman login yang sesuai
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Post Baru</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header>
    <?php include '../layout/headerlogin.html'; ?>
    </header>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Buat Post Baru</h1>
        
        <div class="card">
            <div class="card-body">
                <form action="process_post.php" method="POST">
                    <div class="form-group">
                        <label for="postTitle">Judul</label>
                        <input type="text" class="form-control" id="postTitle" name="postTitle" placeholder="Masukkan judul post Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="postContent">Isi Post</label>
                        <textarea class="form-control" id="postContent" name="postContent" rows="5" placeholder="Tulis post Anda di sini..." required></textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary mr-2">Post</button>
                        <a href="#" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
        
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
