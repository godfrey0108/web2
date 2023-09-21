<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue Pon | About</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Link ke Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">PT. TORANG<span style="color: rgb(238, 202, 0); font-weight: 600 ;">BISA</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/about">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/produk">Informasi Venue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kontak">Kontak</a>
                </li>
            </ul>
            <div class="search-box">
                <input type="text" id="search-input" placeholder="Cari Venue">
                <button id="search-button"><i class="fas fa-search"></i></button>
            </div>

            <button class="btn btn-warning ms-2" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fas fa-user"></i> Login</button>
        </div>
            <div id="profileIcon" class="profile-icon" style="display: none;">
                <i class="fas fa-user"></i>
                <div id="profileDropdown" class="dropdown">
                    <ul>
                        <li><a href="profile.html">profile</a></li>
                        <li><a href="settings.html">settings</a></li>
                        <li><a href="notif.html">Notify</a></li>
                        <li><a href="logout.html">Logout</a></li>
                    </ul>
                </div>
            </div>
    </div>
</nav>

<div class="container"><hr class="border border-4 mb-5 mt-4 box-shadow"></div>

<!-- Modal Login -->
<div class="modal fade " id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-secondary">
                <h5 class="modal-title" id="loginModalLabel">Form Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-secondary">
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Masukkan username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Masukkan password">
                    </div>
                    <button type="submit" class="btn btn-secondary">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Konten utama -->
<div class="container mt-4">
    <h2 class="text-center"><u>Tentang Kami</u></h2>
    <div class="content-section row">
        <div class="content-image col-md-6">
            <img src="asset/img/content/1.jpg" alt="Gambar">
        </div>
        <div class="content-text col-md-6 ">
            <h2>Selamat Datang di PT. TORANG BISA</h2>
            <p>Kami disini untuk menyediakan pelayanan untuk seluruh masyarakat papua agar dapat menikmati fasilitas dari Seluruh Venue Pada PON Papua</p>
            <p>Misi Kami adalah agar seluruh masyarakat dapat menikmati semua fasilitas, agar fasilitas yang ada tidak terbuang cuma - cuma dan dapat di pakai agar berguna bagi seluruh masyarakat yang ada
            </p>
        </div>
    </div>
    <div class="content-section row">
        <div class="content-text col-md-6 order-md-2">
            <h2>Kenapa Kami Ingin Melakukan Ini?</h2>
            <p>Kami melakukan ini agar fasilitas yang ada tidak terbengkalai dan akhirnya terbuang sia-sia, kami juga telah bekerja sama dengan pemerintah kota jayapura agar dapat melakukan ini</p>
            <p>dan juga agar semua warga papua dapat berolahraga dan menjadi sehat</p>
        </div>
        <div class="content-image col-md-6 order-md-2">
            <img src="asset/img/content/2.jpg" style="width: 500px; height: 400px;" alt="Gambar Toko">
        </div>
    </div>
    <div class="content-section row">
        <div class="content-image col-md-6">
            <img src="asset/img/content/1.jpg" alt="Gambar">
        </div>
        <div class="content-text col-md-6 ">
            <h2>Selamat Datang di PT. TORANG BISA</h2>
            <p>Kami disini untuk menyediakan pelayanan untuk seluruh masyarakat papua agar dapat menikmati fasilitas dari Seluruh Venue Pada PON Papua</p>
            <p>Misi Kami adalah agar seluruh masyarakat dapat menikmati semua fasilitas, agar fasilitas yang ada tidak terbuang cuma - cuma dan dapat di pakai agar berguna bagi seluruh masyarakat yang ada
            </p>
        </div>
    </div>
    <div class="content-section row">
        <div class="content-text col-md-6 order-md-2">
            <h2>Kenapa Kami Ingin Melakukan Ini?</h2>
            <p>Kami melakukan ini agar fasilitas yang ada tidak terbengkalai dan akhirnya terbuang sia-sia, kami juga telah bekerja sama dengan pemerintah kota jayapura agar dapat melakukan ini</p>
            <p>dan juga agar semua warga papua dapat berolahraga dan menjadi sehat</p>
        </div>
        <div class="content-image col-md-6 order-md-2">
            <img src="asset/img/content/2.jpg" style="width: 500px; height: 400px;" alt="Gambar Toko">
        </div>
    </div>
</div>

<div class="container"><hr class="border border-4 mb-2 mt-1 box-shadow"></div>

<!-- Logo Merk Alat dan Bahan Bangunan -->
<section class="merk-section box-shadow">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2><u>Kluster Venue</u></h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2 col-6  text-center">
                <div class="merk-logo">
                    <img src="asset/img/merk/1.png" alt="Merk 1" class="merk-image">
                </div>
            </div>
            <div class="col-md-2 col-6 text-center">
                <div class="merk-logo">
                    <img src="asset/img/merk/2.png" alt="Merk 2" class="merk-image">
                </div>
            </div>
            <div class="col-md-2 col-6  text-center">
                <div class="merk-logo">
                    <img src="asset/img/merk/3.png" alt="Merk 3" class="merk-image">
                </div>
            </div>
            <div class="col-md-2 col-6 text-center">
                <div class="merk-logo">
                    <img src="asset/img/merk/4.png" alt="Merk 4" class="merk-image">
                </div>
            </div>

        </div>
    </div>
</section>

<div class="container"><hr class="border border-4 mb-2 mt-1 box-shadow"></div>

<!-- Footer -->
<footer class="footer bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5 class="footer-heading">Hubungi Kami</h5>
                <p><i class="fas fa-envelope footer-icon"></i> Email: info@example.com</p>
                <p><i class="fas fa-phone footer-icon"></i> Telp: (123) 456-7890</p>
                <div class="d-flex">
                    <a href="#" class="footer-link"><i class="fab fa-facebook-square footer-icon"></i></a>
                    <a href="#" class="footer-link"><i class="fab fa-twitter-square footer-icon"></i></a>
                    <a href="#" class="footer-link"><i class="fab fa-instagram-square footer-icon"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <h5 class="footer-heading">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link">Home</a></li>
                    <li><a href="#" class="footer-link">About</a></li>
                    <li><a href="#" class="footer-link">Product</a></li>
                    <li><a href="#" class="footer-link">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="footer-heading">Jam Operasional</h5>
                <p>Senin - Jumat: 08:00 - 18:00</p>
                <p>Sabtu: 08:00 - 14:00</p>
                <p>Minggu: Tutup</p>
            </div>
            <div class="row mt-4">
                <div class="col text-end">
                    <a href="#top" class="btn btn-outline-danger btn-back-to-top">
                     <i class="fas fa-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Link ke Bootstrap JS (diperlukan untuk komponen yang interaktif) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="asset/js/style.js"></script>
</body>
</html>
