<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue Pon | Kontak</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Link ke Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="asset/css/style.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

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
                    <a class="nav-link " href="/about">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/produk">Informasi Venue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/kontak">Kontak</a>
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

<div class="container"><hr class="border border-4 mb-2 mt-1 box-shadow"></div>


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

<div class="container"><hr class="border border-4 mb-5 mt-3 box-shadow"></div>

<div class="container"><hr class="border border-4 mb-1 mt-3 box-shadow"></div>

<!-- Section Peta -->
<section class="map-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="map" style="height: 400px;"></div>
            </div>
        </div>
    </div>
</section>

<div class="container"><hr class="border border-4 mb-2 mt-1 box-shadow"></div>

<!-- Form Kontak -->
<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="section-title">Hubungi Kami</h2>
                <p class="section-subtitle">Silakan isi formulir di bawah ini untuk menghubungi kami.</p>
                <form id="contactForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="asset/js/style.js"></script>
</body>
</html>

