<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/booking.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">
    <title>Halaman Booking</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="img/logo.png " alt="" width="70px">
        </div>
        <nav>
            <div class="topnav" id="myTopnav">
                <a href="home.php">Beranda</a>
                <a href="#">Kontak</a>
                <a href="user.php" class="active">Lapangan</a>
                <a href="#" class="signup-btn">Daftar Akun</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>

            </div>
        </nav>
    </header>
    <main>
        <div class="left-content">
            <div class="container-card">
                <div class="card">
                    <img src="img/lapangan.webp" alt="" class="card-image">
                    <div class="desk-content">
                        <h3>Lapangan 1</h3>
                        <table>
                            <tr>
                                <th>Nama</th>
                                <th>Ket</th>
                            </tr>
                            <tr>
                                <td>Jenis Permukaan</td>
                                <td class="jenis">Rumput Sintetis</td>
                            </tr>
                            <tr>
                                <td>Fasilitas</td>
                                <td class="fasilitas">Pencahayaan LED,Toilet,Kantin</td>
                            </tr>
                            <tr>
                                <td>Harga Sewa</td>
                                <td class="harga">Rp.100.000</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="right-content">
            <div class="container">
                <h2>Pemesanan Tiket Lapangan</h2>
                <form id="bookingForm">
                    <label for="namaPemesan">Nama Pemesan:</label>
                    <input type="text" id="namaPemesan" name="namaPemesan" required>

                    <label for="jumlahJam">Jumlah Jam:</label>
                    <input type="number" id="jumlahJam" name="jumlahJam" min="1" required>

                    <label for="tanggal">Tanggal:</label>
                    <input type="date" id="tanggal" name="tanggal" required>

                    <input type="submit" value="Pesan Tiket">
                </form>
            </div>
        </div>

    </main>
    <!-- <h3>SELESAIKAN TAHAP INI UNTUK MEMESAN LAPANGAN!</h3>
    <p class="saran">Pastikan anda memasukan data dengan benar</p>
    <p class="trim">Terimakasih sudah mengunjungi website kami</p> -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h2>Tentang Kami</h2>
                <p>Kami adalah perusahaan yang bergerak di bidang...</p>
            </div>
            <div class="footer-section">
                <h2>Alamat</h2>
                <p>Jalan Pramuka 10<br>Kota Samarinda<br>75155</p>
            </div>
            <div class="footer-section">
                <h2>Kontak</h2>
                <p>Email: info@gmail.com<br>Telepon: 082123511416</p>
            </div>
        </div>
    </footer>
    <div class="copyright">
        Copyright &copy; 2023 | Kelompok 4 UAS Web-Lanjut
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</body>

</html>