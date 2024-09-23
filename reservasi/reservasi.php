<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Reservasi</h3>
            </div>
            <div class="card-body">
                <p class="text-center">Please fill out the form to book your reservasi stay.</p>
                <form id="reservasiForm">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="startDate">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="startDate" required>
                    </div>
                    <div class="form-group">
                        <label for="endDate">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="endDate" required>
                    </div>
                    <div class="form-group">
                        <label for="addOns">Add-ons</label>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="pendopo">
                            <label class="form-check-label" for="pendopo">Pendopo</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="ruangBaca">
                            <label class="form-check-label" for="ruangBaca">Ruang Baca</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="tamanBermain">
                            <label class="form-check-label" for="tamanBermain">Taman Bermain</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Check Availability</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal untuk menampilkan hasil -->
    <div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-labelledby="resultModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="resultModalLabel">Hasil Pengecekan Reservasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="modalMessage"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="prosesReservasi" style="display:none;">Proses</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#reservasiForm').submit(function(event) {
                event.preventDefault(); // Menghentikan pengiriman form

                // Mengambil nilai dari form
                var name = $('#name').val();
                var startDate = $('#startDate').val();
                var endDate = $('#endDate').val();
                var pendopo = $('#pendopo').is(':checked') ? 'true' : 'false';
                var ruangBaca = $('#ruangBaca').is(':checked') ? 'true' : 'false';
                var tamanBermain = $('#tamanBermain').is(':checked') ? 'true' : 'false';

                // Mengirim permintaan AJAX untuk pengecekan ketersediaan
                $.ajax({
                    url: 'check_availability.php',
                    method: 'POST',
                    data: {
                        name: name,
                        startDate: startDate,
                        endDate: endDate,
                        pendopo: pendopo,
                        ruangBaca: ruangBaca,
                        tamanBermain: tamanBermain
                    },
                    success: function(response) {
                        // Menampilkan modal dengan hasil pengecekan
                        $('#modalMessage').html(response);
                        $('#resultModal').modal('show');
                        
                        // Periksa apakah reservasi tersedia berdasarkan respons dari server
                        if (response.includes("Reservasi tersedia")) {
                            $('#prosesReservasi').show(); // Tampilkan tombol "Proses"
                        } else {
                            $('#prosesReservasi').hide(); // Sembunyikan tombol "Proses"
                        }
                    }
                });
            });

            // Meng-handle klik tombol Proses di dalam modal
            $('#prosesReservasi').click(function() {
                // Lakukan proses untuk menyimpan reservasi ke database
                $.ajax({
                    url: 'process_reservation.php',
                    method: 'POST',
                    data: {
                        name: $('#name').val(),
                        startDate: $('#startDate').val(),
                        endDate: $('#endDate').val(),
                        pendopo: $('#pendopo').is(':checked') ? 'true' : 'false',
                        ruangBaca: $('#ruangBaca').is(':checked') ? 'true' : 'false',
                        tamanBermain: $('#tamanBermain').is(':checked') ? 'true' : 'false'
                    },
                    success: function(response) {
                        alert(response);
                        $('#resultModal').modal('hide');
                    }
                });
            });
        });
    </script>
</body>
</html>
