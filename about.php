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
            <?php include 'layout/header.html'; ?>
        </header>
        <main>
            <!-- About Us Page Section Begin -->
       <section class="aboutus-page-section spad" style="margin-top: 100px; margin-left:80px;">
        <div class="container">
            <div class="about-page-text">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ap-title">
                            <h2>Selamat Datang di Taman Cerdas</h2>
                            <p>Taman Cerdas di Kota Salatiga menggabungkan alam, teknologi, dan pendidikan. 
                                Ruang interaktif yang memberikan pengalaman edukatif dan menghibur untuk semua usia.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <ul class="ap-services">
                            <li><i class="icon_check"></i> Tingkatkan literasi</li>
                            <li><i class="icon_check"></i> TIngkatkan UMKM daerah sekitara</li>
                            <li><i class="icon_check"></i> Discount 15% reservasi</li>
                            <li><i class="icon_check"></i> Free Wifi.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Page Section End -->
    <section class="deskripsi" style="margin-top: 70px">
        <div class="row justify-content-center">
            <div class="col-7 text-center d-flex flex-column align-items-center"> <!-- Menggunakan flexbox untuk memposisikan konten secara tengah -->
                <div class="img-container">
                    <img src="gallery/foto_taman-cerdas_01122023-002934.png" alt="Pendopo" class="img-fluid" style="width: 100%; height: auto; object-fit: cover;">
                </div>
                <div class="text-card" style="text-align: justify;"> <!-- Tambahkan style untuk teks rata halaman -->
                    Taman Cerdas di Kota Salatiga adalah sebuah inovasi yang memadukan elemen alam, teknologi, dan pendidikan. Taman ini menjadi ruang yang cerdas dan interaktif yang dirancang untuk memberikan pengalaman yang mendidik dan menghibur bagi pengunjung dari segala usia.                            
                </div>
                <br>
                <div class="text-card" style="text-align: justify;"> <!-- Tambahkan style untuk teks rata halaman -->
                    Taman Cerdas menawarkan berbagai fasilitas modern, seperti taman bermain cerdas yang dilengkapi dengan permainan edukatif, serta spot-spot informasi interaktif yang mengajak pengunjung untuk belajar tentang lingkungan dan teknologi. Ini adalah tempat yang ideal untuk menginspirasi minat dan pengetahuan anak-anak dalam berbagai disiplin ilmu.
                </div>
                <br>
                <div class="text-card" style="text-align: justify;"> <!-- Tambahkan style untuk teks rata halaman -->
                    Selain itu, taman ini sering menjadi tuan rumah untuk berbagai acara edukatif dan hiburan yang menyatukan masyarakat. Ini menciptakan atmosfer yang dinamis dan penuh semangat di taman.                            
                </div>
                <br>
                <div class="text-card" style="text-align: justify;"> <!-- Tambahkan style untuk teks rata halaman -->
                    Taman Cerdas adalah perpaduan unik antara alam dan teknologi yang menciptakan pengalaman yang unik bagi pengunjung. Ini adalah tempat yang mengingatkan kita akan pentingnya pendidikan dan inovasi dalam menjalani kehidupan sehari-hari. Taman ini mempromosikan pembelajaran yang menyenangkan dan merayakan semangat pengetahuan.                            
                </div>
            </div>
        </div>
    </section>
    
    <style>
        .text-right {
            text-align: right; /* Untuk meratakan teks ke kanan */
        }
    </style>
    
    
        <div class="breadcrumb-section py-3 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text text-center">
                            <h2>Reservasi</h2>
                            <div class="bt-option d-flex justify-content-center">
                                <a href="./home.html" class="text-decoration-none">Home</a>
                                <span class="mx-2">/</span>
                                <span>Area</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section End -->

        <!-- Rooms Section Begin -->
        <section class="rooms-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="room-item card border-0 shadow-sm">
                            <img src="img/room/room-1.jpg" class="card-img-top" alt="PENDOPO">
                            <div class="card-body">
                                <h4 class="card-title">Pendopo</h4>
                                <h3 class="card-text">Rp50.000<span>/Per hari</span></h3>
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td class="fw-bold">Ukuran:</td>
                                            <td>1 lantai</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Kapasitas:</td>
                                            <td>Max 7 orang</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Service:</td>
                                            <td>Free Wifi, Toilet,..</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="btn btn-primary">Lihat detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="room-item card border-0 shadow-sm">
                            <img src="img/room/room-2.jpg" class="card-img-top" alt="RUANG BACA">
                            <div class="card-body">
                                <h4 class="card-title">Ruang Baca</h4>
                                <h3 class="card-text">Rp60.000<span>/Per sehari</span></h3>
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td class="fw-bold">Ukuran:</td>
                                            <td>Lantai 2</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Kapasitas:</td>
                                            <td>Max 35 orang</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Services:</td>
                                            <td>Free Wifi, Buku, Toilet,..</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="btn btn-primary">Lihat detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="room-item card border-0 shadow-sm">
                            <img src="img/room/room-3.jpg" class="card-img-top" alt="TAMAN BERMAIN">
                            <div class="card-body">
                                <h4 class="card-title">Taman Bermain</h4>
                                <h3 class="card-text">Rp45.000<span>/Per hari</span></h3>
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td class="fw-bold">Ukuran:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Kapasitas:</td>
                                            <td>Max 15 orang</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Services:</td>
                                            <td>Free Wifi, Tempat tunggu, Toilet,..</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="btn btn-primary">Lihat detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        Next <i class="bi bi-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- Rooms Section End -->
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
