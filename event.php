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
            <!-- place navbar here -->
        </header>
        <main>
        <style>
        .hero-section {
            position: relative;
            height: 100vh;
            background: #f5f5f5;
        }

        .hero-slider {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            overflow: hidden;
        }

        .hero-slider .carousel-inner {
            height: 100%;
        }

        .hero-slider .carousel-item {
            height: 100%;
        }

        .hero-slider .carousel-item img {
            object-fit: cover;
            height: 100%;
            width: 100%;
            filter: brightness(60%);
        }

        .hero-section .container {
            position: relative;
            z-index: 2;
        }

        .booking-form {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 5px;
            z-index: 3;
        }
    </style>
</head>
<?php include "layout/header.html";?>
    <main>
        <!-- Hero Section Begin -->
        <section class="hero-section d-flex align-items-center">
            <div class="hero-slider carousel slide" id="hero-slider" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="gallery/pendopo.jpg" class="d-block w-100" alt="Hero Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="gallery/Ruang_baca.jpg" class="d-block w-100" alt="Hero Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="hero/hero-3.jpg" class="d-block w-100" alt="Hero Image 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#hero-slider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#hero-slider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero-text">
                            <h1 class="text-light">Reservasi Taman Cerdas</h1>
                            <p class="text-light">Reservasi di taman cerdas lebih mudah dan murah hanya di taman cerdas salatiga.
                                Klik reservasi sekarang dapatkan promo hingga 20%</p>
                        <a class="btn btn-primary shadow" role="button" href="/reservasi/reservasi.php">Login</a>                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                        <div class="booking-form">
                            <h3>Reservasi</h3>
                            <form action="#">
                                <div class="mb-3">
                                    <label for="date-in" class="form-label">Check In:</label>
                                    <input type="text" class="form-control" id="date-in" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="date-out" class="form-label">Check Out:</label>
                                    <input type="text" class="form-control" id="date-out" disabled>
                                </div>
                                <button type="submit" class="btn btn-primary" disabled>Check Availability</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->
         <!-- Blog Details Section Begin -->
         <section class="blog-details-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="blog-details-text">
                            <div class="bd-title">
                                <p>Reservasi Taman Cerdas adalah sebuah aplikasi yang dirancang untuk memudahkan pengguna dalam memesan 
                                    dan mengatur tempat di taman. Aplikasi ini dilengkapi dengan fitur-fitur yang memungkinkan pengguna 
                                    untuk memilih tanggal dan waktu yang sesuai, serta memantau status reservasi.</p>
                                <p>Fitur-Fitur
                                    Pemesanan Tempat: Pengguna dapat memilih tanggal dan waktu yang sesuai untuk memesan tempat di taman. Aplikasi ini akan menampilkan daftar tempat yang tersedia dan memungkinkan pengguna untuk memilih yang sesuai.
                                    Status Reservasi: Aplikasi ini akan menampilkan status reservasi yang sedang berlangsung, sehingga pengguna dapat memantau apakah tempat yang dipilih telah tersedia atau tidak.
                                    Pengaturan Tempat: Pengguna dapat mengatur tempat yang telah dipilih, seperti memilih jumlah tempat yang dibutuhkan dan memantau status reservasi.
                                    Pengiriman Konfirmasi: Setelah pengguna memilih dan mengatur tempat, aplikasi ini akan mengirimkan konfirmasi reservasi ke email pengguna.
                                    Pengaturan Pembayaran: Aplikasi ini memungkinkan pengguna untuk melakukan pembayaran secara online, sehingga pengguna dapat memantau status pembayaran.</p>
                            </div>
                            <div class="bd-pic row">
                                <div class="col-md-4 mb-3">
                                    <img src="img/blog/blog-details/blog-details-1.jpg" class="img-fluid" alt="Blog Detail 1">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <img src="img/blog/blog-details/blog-details-2.jpg" class="img-fluid" alt="Blog Detail 2">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <img src="img/blog/blog-details/blog-details-3.jpg" class="img-fluid" alt="Blog Detail 3">
                                </div>
                            </div>
                            <div class="bd-more-text">
                                <div class="bm-item mb-4">
                                    <h4>Target Market</h4>
                                    <p>Target Market
                                        Reservasi Taman Cerdas dirancang untuk digunakan oleh pengguna yang ingin memesan tempat di taman, seperti:
                                        Pelajar: Pelajar yang ingin memesan tempat di taman untuk kegiatan belajar.
                                        Pekerja: Pekerja yang ingin memesan tempat di taman untuk kegiatan bisnis.
                                        Wisatawan: Wisatawan yang ingin memesan tempat di taman untuk kegiatan wisata.</p>
                                </div>
                                <div class="bm-item mb-4">
                                    <h4>Kontribusi</h4>
                                    <p>Reservasi Taman Cerdas dapat membantu meningkatkan efisiensi dan efektifitas dalam memesan 
                                        tempat di taman, serta memudahkan pengguna dalam mengatur tempat yang telah dipilih.</p>
                                </div>
                            </div>
                            <div class="tag-share d-flex justify-content-between align-items-center my-4">
                                <div class="tags">
                                    <a href="#" class="btn btn-outline-primary btn-sm">Pendopo</a>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Ruang Baca</a>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Tama Bermain</a>
                                </div>
                                <div class="social-share">
                                    <span>Share:</span>
                                    <a href="#" class="btn btn-outline-secondary btn-sm"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="btn btn-outline-secondary btn-sm"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="btn btn-outline-secondary btn-sm"><i class="fa fa-tripadvisor"></i></a>
                                    <a href="#" class="btn btn-outline-secondary btn-sm"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="btn btn-outline-secondary btn-sm"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
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
                                    <a href="forum/index.php" class="btn btn-primary btn-lg create-post-btn">Buat Post Baru</a>
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
                                    echo '<a href="forum/post_details.php?id=' . $row['id'] . '" class="btn btn-secondary btn-sm">Read More</a>';
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
                            
    <!--tambah-->
                            <div class="leave-comment mt-5">
                                <h4>Tambah komentar</h4>
                                <form action="#" class="comment-form mt-3">
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <input type="text" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <input type="text" class="form-control" placeholder="Website">
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <textarea class="form-control" placeholder="Messages"></textarea>
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Details Section End -->

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
