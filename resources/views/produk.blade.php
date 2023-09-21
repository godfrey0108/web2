<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue Pon | Informasi Venue</title>
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
                    <a class="nav-link " href="/about">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/produk">Informasi Venue</a>
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

<div class="container"><hr class="border border-4 mb-2 mt-5 box-shadow"></div>


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

<!-- Konten Produk -->
<div class="container mt-5">
    <h2 class="text-center mb-3"><u>Kluster Vanue Pon</u></h2>

    <div class="row row-cols-1 row-cols-md-2">
        <!-- Card 1 -->
        <div class="col mb-4">
            <a href="/jayapura">
                <div class="card py-4">
                    <div class="text-center">
                        <img src="asset/img/merk/1.png" class="img-fluid rounded" style="width: 225px; height: 273px;" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kota Jayapura</h5>
                        <p class="card-text">Pada Kluster Kota Jayapura Terdapat 16 Venue</p>

                    </div>
                </div>
            </a>
        </div>

        <!-- Card 2 -->
        <div class="col mb-4">
            <a href="kabupatenjayapura.html">
                <div class="card py-4">
                    <div class="text-center">
                        <img src="asset/img/merk/2.png" class="img-fluid rounded" style="width: 225px; height: 273px;" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kabupaten Jayapura</h5>
                        <p class="card-text">Pada Kluster Kabupaten Jayapura Terdapat 14 Venue</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card 3 -->
        <div class="col mb-4">
            <a href="mimika.html">
                <div class="card py-4">
                    <div class="text-center">
                        <img src="asset/img/merk/3.png" class="img-fluid rounded" style="width: 225px; height: 273px;" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kabupaten Mimika</h5>
                        <p class="card-text">Pada Kabupaten Mimika Terdapat 9 Venue</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card 4 -->
        <div class="col mb-4">
            <a href="merauke.html">
                <div class="card py-4">
                    <div class="text-center">
                        <img src="asset/img/merk/4.png" class="img-fluid rounded" style="width: 225px; height: 273px;" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kabupaten Merauke</h5>
                        <p class="card-text">Pada Kabupaten Merauke Terdapat 5 Venue</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="container"><hr class="border border-4 mb-2 mt-1 box-shadow"></div>

<!-- Section Testimoni -->
<div class="testimoni-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h2 class="section-title">Testimonials</h2>
                <p class="section-subtitle">What our customers are saying</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="testimoni-carousel">
                    <!-- Testimoni Item 1 -->
                    <div class="testimoni-item">
                        <div class="testimoni-content">
                            <p class="testimoni-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                        </div>
                        <div class="testimoni-author">
                            <img src="asset/img/merk/client-1.png" alt="Customer 1" class="author-avatar">
                            <div class="author-details">
                                <h4 class="author-name">John Doe</h4>
                                <p class="author-role">Customer</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimoni Item 2 -->
                    <div class="testimoni-item">
                        <div class="testimoni-content">
                            <p class="testimoni-text">"Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
                        </div>
                        <div class="testimoni-author">
                            <img src="asset/img/merk/client-2.png" alt="Customer 2" class="author-avatar">
                            <div class="author-details">
                                <h4 class="author-name">Jane Smith</h4>
                                <p class="author-role">Customer</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

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

