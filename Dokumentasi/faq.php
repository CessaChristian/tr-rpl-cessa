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
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
        <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-light fixed-top navbar-custom" style="margin-bottom: 60px; background-color:beige;">
            <a class="navbar-brand" href="#">Taman Cerdas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="srs.php">SRS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq.php">FAQ</a>
                    </li>
                </ul>
          <form class="form-inline mx-auto" onsubmit="searchContent(event)">
        <input class="form-control mr-sm-2" id="searchInput" type="search" placeholder="Search" aria-label="Search" oninput="searchContent(event)">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="auth/register.php">Register</a>
                    </li>
                </ul>
            </div>
        </nav>        
        </header>
        <main>
            <section class="py-5" style="margin-top: 50px;">
                <div class="container">
                    <div class="row justify-content-center text-center mb-3">
                        <div class="col-lg-8 col-xl-7">
                            <span class="text-muted">F.A.Q</span>
                            <h2 class="display-5 fw-bold">Frequently Asked Questions</h2>
                            <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit Consequatur quidem eius cum voluptatum quasi delectus.</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                          <div class="accordion" id="accordionExample">
                            <div class="accordion-item border-0 mb-3">
                              <h2 class="accordion-header" id="headingOne"><button aria-controls="collapseOne" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#collapseOne" data-bs-toggle="collapse" type="button">
                              <div class="text-muted me-3">
                                <svg class="bi bi-question-circle-fill" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path></svg>
                              </div>Di mana lokasi Taman Cerdas Salatiga?
                              </button></h2>
                              <div aria-labelledby="headingOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample" id="collapseOne">
                                <div class="accordion-body">
                                Taman Cerdas Salatiga terletak di pusat kota Salatiga, tepatnya di Jl. Diponegoro No. 30, Salatiga, Jawa Tengah.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item border-0 mb-3">
                              <h2 class="accordion-header" id="headingTwo"><button aria-controls="collapseTwo" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#collapseTwo" data-bs-toggle="collapse" type="button">
                              <div class="text-muted me-3">
                                <svg class="bi bi-question-circle-fill" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path></svg>
                              </div>Apakah ada acara atau kegiatan rutin di Taman Cerdas Salatiga?
                              </button></h2>
                              <div aria-labelledby="headingTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample" id="collapseTwo">
                                <div class="accordion-body">
                                Taman Cerdas Salatiga sering mengadakan berbagai acara dan kegiatan rutin, seperti workshop seni dan kerajinan, kelas edukasi, pertunjukan seni, dan kegiatan komunitas. Informasi lebih lanjut tentang acara dapat ditemukan di papan pengumuman taman atau media sosial resmi Taman Cerdas Salatiga.
                              </div>
                            </div>
                            <div class="accordion-item border-0 mb-3">
                              <h2 class="accordion-header" id="headingThree"><button aria-controls="collapseThree" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#collapseThree" data-bs-toggle="collapse" type="button">
                              <div class="text-muted me-3">
                                <svg class="bi bi-question-circle-fill" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path></svg>
                              </div> Bagaimana cara saya bisa berpartisipasi atau menyelenggarakan acara di Taman Cerdas Salatiga?
                              </button></h2>
                              <div aria-labelledby="headingThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample" id="collapseThree">
                                <div class="accordion-body">
                                Untuk berpartisipasi atau menyelenggarakan acara di Taman Cerdas Salatiga, Anda dapat menghubungi pengelola taman melalui nomor telepon yang tertera atau melalui email resmi Taman Cerdas Salatiga. Pengajuan acara biasanya memerlukan detail rencana acara dan mungkin memerlukan persetujuan dari pihak pengelola.
                              </div>
                            </div>
                            <div class="accordion-item border-0 mb-3">
                              <h2 class="accordion-header" id="headingFour"><button aria-controls="collapseFour" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#collapseFour" data-bs-toggle="collapse" type="button">
                              <div class="text-muted me-3">
                                <svg class="bi bi-question-circle-fill" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path></svg>
                              </div>Apakah ada layanan makanan dan minuman di Taman Cerdas Salatiga?
                              </button></h2>
                              <div aria-labelledby="headingFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample" id="collapseFour">
                                <div class="accordion-body">
                                Di dalam taman terdapat beberapa umkm yang menjual makanan dan minuman ringan. Pengunjung juga diperbolehkan membawa bekal sendiri, tetapi dimohon untuk menjaga kebersihan dan tidak meninggalkan sampah.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item border-0 mb-3">
                              <h2 class="accordion-header" id="headingFive"><button aria-controls="collapseFive" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#collapseFive" data-bs-toggle="collapse" type="button">
                              <div class="text-muted me-3">
                                <svg class="bi bi-question-circle-fill" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path></svg>
                              </div>Bagaimana cara reservasi</button></h2>
                              <div aria-labelledby="headingFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample" id="collapseFive">
                                <div class="accordion-body">
                                  Pertama anda harus mendaftarkan akun anda terlebih dahulu dengan register.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item border-0 mb-3">
                              <h2 class="accordion-header" id="headingSix"><button aria-controls="collapseFive" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#collapseSix" data-bs-toggle="collapse" type="button">
                              <div class="text-muted me-3">
                                <svg class="bi bi-question-circle-fill" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path></svg>
                              </div>Taman cerdas beroperasi mulai dari jam berapa?</button></h2>
                              <div aria-labelledby="headingSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample" id="collapseSix">
                                <div class="accordion-body">
                                  Taman cerdas beroperasi setiap hari dan buka dari jam 8 pagi hingga jam 10 malam.
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
             <!-- Form Komentar -->
            <div class="container mt-5">
                <form id="commentForm">
                    <div class="mb-3">
                        <label for="comment" class="form-label">Comment:</label>
                        <textarea class="form-control" id="comment" name="comment" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <!-- Alert Danger -->
                <div id="loginAlert" class="alert alert-danger mt-3 d-none" role="alert">
                    Anda harus login terlebih dahulu.
                </div>
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
        <script>
        </script>
          <script src="./js/danger.js" ></script>
          <script src="./js/search.js"></script>
    </body>
</html>
