<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Per-Post</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- Custom styles -->
    <style>
        .post {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
        }
        .post .post-title {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .post .post-meta {
            font-size: 14px;
            color: #777;
        }
        .search-container {
            max-width: 400px;
            margin-bottom: 20px;
        }
        .create-post-btn {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <header>
    <?php include '../layout/header.html'; ?>
    </header>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Forum</h1>
        
        <!-- Search Bar and Create Post Button -->
        <div class="row">
            <div class="col-md-8">
                <div class="search-container">
                    <form action="#" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search posts...">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <a href="post.php" class="btn btn-primary btn-lg create-post-btn">Buat Post Baru</a>
            </div>
        </div>
        
        <?php
        // Koneksi ke database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tr_rpl"; // Ganti dengan nama database Anda

        // Membuat koneksi
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Memeriksa koneksi
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query untuk mengambil data post
        $sql = "SELECT * FROM post";
        $result = $conn->query($sql);

        // Memeriksa apakah ada post yang tersedia
        if ($result->num_rows > 0) {
            // Loop untuk menampilkan setiap post
            while($row = $result->fetch_assoc()) {
                echo '<div class="post">';
                echo '<div class="post-title">' . htmlspecialchars($row['title']) . '</div>';
                echo '<div class="post-meta">Posted by ' . htmlspecialchars($row['username']) . ' on ' . htmlspecialchars($row['created_at']) . '</div>';
                echo '<div class="post-content">';
                // Menampilkan cuplikan konten post
                echo '<p>' . htmlspecialchars(substr($row['content'], 0, 150)) . '...</p>';
                // Tombol Read More
                echo '<a href="post_details.php?id=' . $row['id'] . '" class="btn btn-secondary btn-sm">Read More</a>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<div class="alert alert-info">Tidak ada post tersedia.</div>';
        }

        // Menutup koneksi
        $conn->close();
        ?>
        
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
