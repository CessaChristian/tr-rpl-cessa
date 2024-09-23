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
				<form class="form-inline mx-auto">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
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
		<div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg" style="margin-top: 50px;">
		<div class="container">

			<div class="row">
				<!-- Navbar -->
				<nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light" style="margin-top: 60px">
					<button
					class="navbar-toggler"
					type="button"
					data-mdb-toggle="collapse"
					data-mdb-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					
				</button>
				<div class="container d-flex justify-content-center" style="margin-top: 0px; background-color:rgb(121, 123, 125);">
					<div class="row">
					<div class="col-12 d-flex justify-content-center mb-3">
					</div>
					<div class="col-12 d-flex justify-content-center">
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav align-items-center mx-auto">
							<li class="nav-item">
							<a class="nav-link mx-2" href="#fitur"><i class="list-group-item list-group-item-action"></i>User</a>
							</li>
							<li class="nav-item">
								<a class="nav-link mx-2" href="#navbar"><i class="list-group-item list-group-item-action"></i>Fitur</a>
								</li>
							<li class="nav-item">
							<a class="nav-link mx-2" href="#Landing-Page"><i class="list-group-item list-group-item-action"></i>Diagram</a>
							</li>
							<li class="nav-item">
							<a class="nav-link mx-2" href="#kontak"><i class="list-group-item list-group-item-action"></i>Figma</a>
							</li>
						</ul>
						</div>
					</div>
					</div>
				</div>
				</nav>
				<!-- Navbar -->
				<div class="col-lg-11" style="margin-top: 70px; width: 100%;">
		 <div data-spy="scroll" data-target="#scroll-ku" data-offset="0" style="height: 10000px;overflow-y: scroll;">

			 <h2 id="fitur">Kebutuhan User</h2>
			 <p>
				 <li>
					 Pengunjung memerlukan petunjuk arah digital yang interaktif untuk membantu mereka menemukan fasilitas-fasilitas di taman dengan mudah.				 </li>
				 <li>
					Fitur login dan register tersedia untuk pengunjung taman cerdas hal ini berfungsi untuk mendapatkan notifikasi dan juga pemberitahuan aktivitas lainnya
				 </li>
				 <li>
					 Pusat Inspirasi Pendidikan: Merupakan tempat ideal untuk memupuk minat dan pengetahuan anak-anak dalam berbagai disiplin ilmu, mengajak mereka untuk belajar tentang lingkungan dan teknologi secara aktif.
				 </li>
				 <h5>Kebutuhan Fungsional</h5>
				 <li>
					 Fitur reservasi di Taman Cerdas memungkinkan pengunjung untuk melakukan pemesanan sebelum datang atau saat berada di taman
				 </li>
				 <br>
				 <h5>Use Case Diagram</h5>
				 <li>
					Berdasarkan use case diagram kami terdapat admin dan user yang terlibat dalam proses Reservasi
				 </li>
				 <img src="gallery/use_case.png" class="img-fluid" alt="...">
			 </p>

			 <hr>
			 
			 <h2 id="Navbar">Penjelasan Pengguna</h2>
			 <p>
				 <h3>Login Page</h3>
				 <img class="card-img-fluid mx-auto d-block" src="gallery/Login Page.png" alt="Choosing A Static Caravan" style="max-width: 70%; height: auto;">
				 <img src="..." class="img-fluid" alt="...">
				 <li>
					Login bisa digunakan untuk login admin dan juga user namun jika belum login akan muncul warning. Oleh karena itu diharuskan untuk register terlebih dahulu
				 </li>				 
				 <img class="card-img-fluid mx-auto d-block" src="gallery/Loginerror.png" alt="Choosing A Static Caravan" style="max-width: 70%; height: auto;">
				 <h3>Register Page</h3>
				 <img class="card-img-fluid mx-auto d-block" src="gallery/Register Page.png" alt="Choosing A Static Caravan" style="max-width: 70%; height: auto;">
				 <li>
					Isi register berdasarkan email dan password yang sesuai
				 </li>
				 <li>
					Hanya dengan mengikuti langkah-langkah tersebut anda dapat mengakses Reservasi
				 </li>
				 <h5>Fungsi Admin</h5>
				 <li>
					Admin dapat mengelola data pengunjung dan juga data reservasi yang masuk.Berdasarkan Use Case admin juga harus melakukan Login terlebih dahulu baru setelah itu dapat mengakses data Reservasi.
					Admin dapat menerima data reservas maupun menolak data reservasi
				 </li>
				 <br>
				 <img class="card-img-fluid mx-auto d-block" src="img/gallery/Swap Mode.png" alt="Choosing A Static Caravan" style="max-width: 60%; height: auto;">
			 </p>
			 <hr>
			 
			 <h2 id="Navbar">Fitur Reservasi</h2>
			 <p>
				 <h3>Reservasi Page User</h3>
				 <img src="gallery/reservasi.png" class="img-fluid" alt="...">
				 <li>
					Reservasi memiliki tampilan seperti di gambar. Lamanya hari menentukan berapa biaya yang akan dikenakan untuk penyewa. Setelah mengisi data anda harus menekan submit untuk mendapatkan total biayanya
				 </li>
				 <img class="card-img-fluid mx-auto d-block" src="gallery/cek.png" alt="Choosing A Static Caravan" style="max-width: 50%; height: auto;">
				 <li>
					Tekan tombol proses untuk dapat ke langkah selanjutnya yaitu melihat data yang telah kita masukkan
				 </li>
				 <img class="card-img-fluid mx-auto d-block" src="gallery/datareservasi.png" alt="Choosing A Static Caravan" style="max-width: 50%; height: auto;">
				 <img class="card-img-fluid mx-auto d-block" src="gallery/Profile Menu.png" alt="Choosing A Static Caravan" style="max-width: 50%; height: auto;">
				 <li>
					Disini kita dapat mengedit dan mengupdate data Reservasi kita sebelum dikonfirmasi oleh admin. Atau anda juga dapat menghapus atau membatalkan reservasi anda. Ini dapat anda temukan di bagian profile anda di bagian pengaturan
				 </li>
				 <img class="card-img-fluid mx-auto d-block" src="gallery/konfirm.png" alt="Choosing A Static Caravan" style="max-width: 50%; height: auto;">
				 <li>
					Setelah di Acc anda perlu mengupload foto pembayaran pada form teresebut. Sebagai bukti bahwa anda telah melakukan reservasi
				 </li>
				 <h3>Reservasi Page Admin</h3>
				 <li>
					Admin dapat melihat data reservasi yang masuk dan juga dapat mengkonfirmasi ataupun menolak data Reservasi seperti pada penjelasan pengguna
				 </li>
				 <br>
				 <img class="card-img-fluid mx-auto d-block" src="gallery/acc.png" alt="Choosing A Static Caravan" style="max-width: 60%; height: auto;">
			 </p>
			 <hr>

			 <h2 id="Landing-Page">Diagram</h2>
			 <p>
				 <h5>Use Case Diagram</h5>
				 <img src="..." class="img-fluid" alt="...">
				 <li>
					 Halaman Home berisikan Gambar depan halaman Taman Cerdas. Tombol lebih lanjut mengarahkan kita ke halaman About Us yang berisikan penjelasan dan sejarah Taman Cerdas Kota Salatiga.
					 Dilanjutkan dengan section foto-foto dari sarana di Taman Cerdas. Ruang terbuka bermakna bahwa Taman Cerdas bersifat umum dan dapat digunakan oleh siapapun. Oleh karena itu terdapat juga
					 gitur Reservasi yang dapat dilakukan oleh semua orang dengan kriteria tertentu. Yang terakhir disediakan juga alamat google maps dari Taman Cerdas.
				 </li>
				 <br>
				 <h5>Homepage</h5>
				 <img src="img/gallery/Home2.png" class="img-fluid" alt="..." style="max-width: 50%; height: auto; display: block; margin-left: auto; margin-right: auto;">
				 <li>
					 Halaman Home diubah dengan mode Dark-mode, sehingga tampilan di dalamnya pun warnanya berubah.
				 </li>
				 <br>
				 <h3>About Us</h3>
				 <img src="img/gallery/Home2.png" class="img-fluid" alt="..." style="max-width: 50%; height: auto; display: block; margin-left: auto; margin-right: auto;">
				 <li>
					 Halaman Home berisikan Gambar depan halaman Taman Cerdas. Tombol lebih lanjut mengarahkan kita ke halaman About Us yang berisikan penjelasan dan sejarah Taman Cerdas Kota Salatiga.
					 Dilanjutkan dengan section foto-foto dari sarana di Taman Cerdas. Ruang terbuka bermakna bahwa Taman Cerdas bersifat umum dan dapat digunakan oleh siapapun. Oleh karena itu terdapat juga
					 gitur Reservasi yang dapat dilakukan oleh semua orang dengan kriteria tertentu. Yang terakhir disediakan juga alamat google maps dari Taman Cerdas.
				 </li>
				 <h5>diagram</h5>
				 <img src="img/gallery/About Us.png" class="img-fluid" alt="..." style="max-width: 50%; height: auto; display: block; margin-left: auto; margin-right: auto;">
				 <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum veritatis architecto quas! Enim omnis rem, veniam nulla labore fuga magni! Porro labore odio consequatur praesentium ad soluta error voluptatum, voluptates, ullam expedita sed eaque provident, voluptatem animi nulla nobis. Impedit!</li>
			 </p>

			 <hr>

			 <h2 id="kontak">Dokumentasi Figma</h2>
			 <p>
				 Kontak malasngoding.com :
				 <br/>
				 <b>malasngoding@gmail.com</b>
			 </p>

		 </div>
	 </div>
 </div>
</div>

	<!-- Bootstrap Bundle with Popper -->
	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-sP7BAcH0s5W2vYDrBj/eAV4I+HU7m6WZoK4TCR/Mhg0uu4UOPbFkkA4JNY4yrw+4"
		crossorigin="anonymous"
	></script>
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
	

	 