<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">
    <title>Halaman Lapangan</title>
    <link rel="icon" type="image/png" href="img/logo.png">
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
    <br>

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="img/tur1.jpeg" style="width:100%">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="img/tur2.jpg" style="width:100%">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="img/tur3.jpeg" style="width:100%">
            <div class="text">Caption Three</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <br>
    <!-- card booking lapangan -->
    <h3>DAFTAR LAPANGAN</h3>
            <?php
            include 'function/koneksi.php';
            $data = mysqli_query($koneksi, "SELECT * FROM lapangan");
            while ($d = mysqli_fetch_array($data)) {
                ?>
    <div class="container">
        <div class="card">
                <img src="admin/img/<?php echo $d['gambar_lapangan']; ?>" alt="Gambar Lapangan"
                    style="max-width: 100px; max-height: 100px;">
                <div class="desk-content">
                    <h3>
                        <?php echo ucwords($d['nama_lapangan']); ?>
                    </h3>
                    <table>
                        <tr>
                            <th>Nama</th>
                            <th>Ket</th>
                        </tr>
                        <tr>
                            <td>Jenis Permukaan</td>
                            <td class="jenis">
                                <?php echo ucwords($d['jenis_lapangan']); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Harga Sewa</td>
                            <td class="harga">
                                <?php echo 'Rp ' . number_format($d['harga'], 0, ',', '.'); ?>
                            </td>
                        </tr>
                    </table>

                <button class="book-btn"><a href="booking.php">Booking</a></button>
            </div>
        </div>
    </div>
    </div>
                    <?php
            }
            ?>

   
    </div>

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

        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1; }
            if (n < 1) { slideIndex = slides.length; }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
</body>

</html>