<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/body.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>HOME</title>
    <link rel="icon" type="image/png" href="img/logo.png">
</head>

<body>
    <header>
        <div class="logo">
            <img src="img/logo.png " alt="" width="70px">
        </div>
        <nav>
            <div class="topnav" id="myTopnav">
                <a href="home.php" class="active">Beranda</a>
                <a href="#">Kontak</a>
                <a href="user.php">Lapangan</a>
                <a href="#" class="signup-btn">Daftar Akun</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
                
            </div>
        </nav>
    </header>
    <main>
        <div class="content-left">
            <h1>PRAMUKA FUTSAL</h1>
            <h3>Lapangan Futsal Jalan Pramuka</h3>
            <button class="btn-more"><a href="#">Selengkapnya</a></button>
        </div>
        <div class="content-right">
            <img class="gambar-content" src="img/bola.png" alt="">
        </div>
    </main>
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