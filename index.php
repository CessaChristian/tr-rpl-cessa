<?php include 'galeri_foto/koneksi.php'; ?>
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
            <?php include 'layout/header.html'; ?>
        </header>
        <main>
        <section class="foto-banner" style="background-color: gray-100;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="gallery/foto_taman-cerdas_01122023-002934.png" alt="Taman Cerdas Kota Salatiga" style="width: 100%; height: 500px; margin-top: 70px;">
                            <!-- Isi konten sesuai kebutuhan Anda -->
                        </div>
                    </div>
                </div>
                <div class="py-xl-5" style="margin-top: 0">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-md-10 col-xl-8 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                                <div>
                                    <h2 class="text-uppercase fw-bold text-success mb-3">Taman Cerdas Kota Salatiga</h2>
                                    <p class="mb-4">Taman Cerdas di Kota Salatiga menggabungkan alam, teknologi, dan pendidikan. Ruang interaktif yang memberikan pengalaman edukatif dan menghibur untuk semua usia.</p>
                                    <a class="btn btn-primary fs-5 me-2 py-2 px-4" role="button" href="about-us.php">Lebih Lanjut</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
             </section> 
             <div class="container" style="background-color: gray-200; margin-top: 40px;">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="text-center"><strong>Galeri Foto</strong></h2>
                                <p class="text-center">Jelajahi keindahan dan keunikan taman ini melalui lensa kamera. Tiap gambar menangkap momen magis, menggambarkan harmoni antara alam, teknologi, dan pendidikan.</p>
                            </div>
                        </div>
                    </div>
            <div class="container">
                <div class="row">
                    <?php
                    $sql = "SELECT * FROM foto";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo '<div class="col-md-4">';
                            echo '<div class="card mb-4" style="weidth:20%; heigiht:20%">';
                            echo '<img src="galeri_foto/' . $row["nama_file"] . '" class="card-img-top" alt="Foto">';
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
            <section style="padding-top: 32px;">
                <!-- Start: 1 Row 2 Columns -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1><strong>Reservasi</strong></h1>
                            <p>Taman Cerdas Salatiga menawarkan berbagai fasilitas yang dapat meyewakan area tertentu untuk kegiatan yang ingin di area yang luas, seperti kegiatan sosial, live music, dll. Disini tinggal klik reservasi dapat menyewa area yang diinginkan.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="carousel slide carousel-dark" data-bs-ride="false" id="carousel-2">
                                <div class="carousel-inner">
                                    <div class="carousel-item active"><img class="w-100 d-block" src="gallery/Pendopo.jpg" alt="Slide Image" style="width: 649px; height: 491px;"></div> 
                                    <div class="carousel-item"><img class="w-100 d-block" src="gallery/Ruang_baca.jpg" alt="Slide Image" style="width: 649px; height:491px;"></div>
                                    <div class="carousel-item"><img class="w-100 d-block" src="gallery/Taman Bermain.jpg" alt="Slide Image"style="width: 649px; height:491px;"></div>
                                </div>
                                <div>
                                    <!-- Start: Previous --><a class="carousel-control-prev" href="#carousel-2" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><!-- End: Previous -->
                                    <!-- Start: Next --><a class="carousel-control-next" href="#carousel-2" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a><!-- End: Next -->
                                </div>
                                <div class="carousel-indicators"><button type="button" data-bs-target="#carousel-2" data-bs-slide-to="0" class="active"></button> <button type="button" data-bs-target="#carousel-2" data-bs-slide-to="1"></button> <button type="button" data-bs-target="#carousel-2" data-bs-slide-to="2"></button></div>
                            </div>
                        </div>
                    </div>
                </div><!-- End: 1 Row 2 Columns -->
            </section>
            <section style="padding-top: 32px;">
                <!-- Start: 1 Row 2 Columns -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1><strong>Lokasi</strong></h1>
                            <p>Lokasi Taman Cerdas terletak di Sidorejo Lor, Kec. Sidorejo, Kota Salatiga, Jawa Tengah. Dekat dengan salah satu fakultas UKSW yaitu Fakultas Teknologi Informasi</p>
                        </div>
                        <div class="col-md-6"><iframe allowfullscreen="" frameborder="0" loading="lazy" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBJCDq0NABcYosN1fNy3cxUEtwRnSNZpmc&amp;q=Taman+Cerdas+Salatiga&amp;zoom=15" width="100%" height="400"></iframe></div>
                    </div>
                </div><!-- End: 1 Row 2 Columns -->
            </section>
            <!-- Start: Testimonials -->
            <div class="container py-5">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <p class="fw-bold text-success mb-2">Pengembang</p>
                        <h2 class="fw-bold"><strong>Pengembang Taman Cerdas Kota Salatiga</strong></h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 d-sm-flex justify-content-sm-center">
                    <div class="col mb-4">
                        <div class="d-flex flex-column align-items-center align-items-sm-start">
                            <p class="bg-body-tertiary border rounded border-light p-4">Fasilitas perpustakaan yang ada sangat membantu untuk menumbuhkan minat baca sejak dini.</p>
                            <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/people/avatar2.jpg">
                                <div>
                                    <p class="fw-bold text-primary mb-0">Ardiva</p>
                                    <p class="text-muted mb-0">TI 22</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="d-flex flex-column align-items-center align-items-sm-start">
                            <p class="bg-body-tertiary border rounded border-light p-4">Tempat ini menyediakan lingkungan yang kondusif untuk belajar di luar kelas.</p>
                            <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/people/avatar4.jpg">
                                <div>
                                    <p class="fw-bold text-primary mb-0">Cessa</p>
                                    <p class="text-muted mb-0">TI 22</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="d-flex flex-column align-items-center align-items-sm-start">
                            <p class="bg-body-tertiary border rounded border-light p-4">Saya juga senang melihat berbagai program dan acara yang sering diadakan, seperti lomba melukis dan workshop keterampilan.</p>
                            <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/people/avatar5.jpg">
                                <div>
                                    <p class="fw-bold text-primary mb-0">Hussein</p>
                                    <p class="text-muted mb-0">TI 22</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!-- End: Hero Banner -->
        </main>
        <footer>
        <?php include 'layout/footer.html'; ?>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>
