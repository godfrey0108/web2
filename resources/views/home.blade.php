<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue Pon | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
                    <a class="nav-link active" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/produk">Informasi Venue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kontak">Kontak</a>
                </li>
            </ul>
            <div class="search-box ">
                <input type="text" id="search-input" placeholder="Cari Venue">
                <button id="search-button"><i class="fas fa-search"></i></button>
                <div id="search-results">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Hasil Pencarian</th>
                            </tr>
                        </thead>
                        <tbody id="search-results-body">
                            <!-- Hasil pencarian akan ditambahkan di sini -->
                        </tbody>
                    </table>
                </div>
            </div>

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
                    <button type="submit" class="btn btn-warning">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container"><hr class="border border-4 mb-2 mt-4 box-shadow"></div>

<!-- Carousel -->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-12">
                        <img src="asset/img/slide/slide1.jpg" alt="Slide 1" class="img-fluid w-100 darkened-img">
                    </div>
                    <div class="col-md-6 d-flex ">
                        <div class="carousel-caption text-end">
                            <h1>PON PAPUA #TORANGBISA</h2>
                            <p style="font-size: 24px;">Selamat Datang Di Website Kami</p>
                        </div>
                    </div>
                </div>
        </div>
        <div class="carousel-item">
                <div class="row">
                    <div class="col-md-12">
                        <img src="asset/img/slide/slide1.jpg" alt="Slide 2" class="img-fluid w-100 darkened-img">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="carousel-caption text-end ">
                            <h1>PT.TORANG BISA</h2>
                            <p style="font-size: 24px;">Disini kami menyediakan pelayanan bagi masyarakat yang ingin menikmati fasilitas dari Venue yang ada di seluruh Cluster dari venue PON PAPUA </p>
                        </div>
                    </div>
                </div>
        </div>

    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>

<div class="container"><hr class="border border-4 mb-2 mt-1 box-shadow"></div>

<!-- Konten utama -->
<div class="container mt-4">
    <h2 class="text-center"><u>Tentang Kami</u></h2>
    <div class="content-section row">
        <div class="content-image col-md-6">
            <img src="asset/img/content/1.jpg" alt="Gambar">
        </div>
        <div class="content-text col-md-6 ">
            <h2>Selamat Datang di PT.TORANG BISA</h2>
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
            <button class="btn btn-outline-warning"> Selengkapnya</button>
        </div>
        <div class="content-image col-md-6 order-md-2">
            <img src="asset/img/content/2.jpg" style="width: 500px; height: 400px;" alt="Gambar Toko">
        </div>
    </div>
</div>

<div class="container"><hr class="border border-4 mb-2 mt-1 box-shadow"></div>

<!-- Fasilitas Unggulan -->
<div class="container mt-4">
  <h2 class="text-center"><u>Fasilitas Unggulan</u></h2>
  <p class="text-center">Ini adalah daftar dari beberapa fasilitas yang paling banyak diminati masyarakat</p>
  <div class="row row-cols-1 row-cols-md-3 g-4 product-list">
      <!-- Product -->
      <div class="col product-item" data-category="alat">
          <div class="card bg-secondary">
              <img src="asset/img/venue/1.png" class="card-img-top" alt="">
              <div class="card-body">
                  <h5 class="card-title text-light">Lapangan Baseball</h5>
                  <p class="card-text text-light">Ini adalah lapangan baseball pada saat pon papua </p>
                  <div class="d-flex">
                      <span class="text-light fw-bold product-price me-3 text-light">Rp.19.99</span>
                      <button class="btn btn-outline-warning btn-view me-3" data-bs-toggle="modal" data-bs-target="#detailModal_1"><i class="fas fa-solid fa-eye"></i></button>
                      <a href="pembayaran.html"><button class="btn btn-warning " data-id="1" data-name="Product 1" data-price="19.99" data-image="asset/img/venue/1.png">Beli Tiket</button></a>

                    </div>
              </div>
          </div>
      </div>

      <div class="col product-item" data-category="Bahan">
          <div class="card bg-secondary">
              <img src="asset/img/venue/2.png" class="card-img-top" alt="">
              <div class="card-body">
                  <h5 class="card-title text-light">LAPANGAN VOLI PASIR </h5>
                  <p class="card-text text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <div class="d-flex">
                      <span class="text-danger fw-bold product-price me-3 text-light">Rp.19.99</span>
                      <button class="btn btn-outline-warning btn-view me-3" data-bs-toggle="modal" data-bs-target="#detailModal_2"><i class="fas fa-solid fa-eye"></i></button>
                      <a href="pembayaran.html"><button class="btn btn-warning btn-add-to-cart" data-id="2" data-name="Product 2" data-price="19.99" data-image="https://via.placeholder.com/300x200">Beli Tiket</button></a>
                  </div>
              </div>
          </div>
      </div>

      <div class="col product-item" data-category="alat">
          <div class="card bg-secondary">
              <img src="asset/img/venue/3.png" class="card-img-top" alt="">
              <div class="card-body">
                  <h5 class="card-title text-light">GOR Cendrawasih APO</h5>
                  <p class="card-text text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <div class="d-flex">
                      <span class="text-light fw-bold product-price me-3 ">Rp.19.99</span>
                      <button class="btn btn-outline-warning btn-view me-3" data-bs-toggle="modal" data-bs-target="#detailModal_3"><i class="fas fa-solid fa-eye"></i></button>
                      <a href="pembayaran.html"><button class="btn btn-warning btn-add-to-cart" data-id="3" data-name="Product 3" data-price="19.99" data-image="https://via.placeholder.com/300x200">beli Tiket</button></a>
                  </div>
              </div>
          </div>
      </div>

      <div class="col product-item" data-category="bahan">
          <div class="card bg-secondary">
              <img src="asset/img/venue/4.png" class="card-img-top" alt="">
              <div class="card-body">
                  <h5 class="card-title text-light">GOR Waringin </h5>
                  <p class="card-text text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <div class="d-flex">
                      <span class="text-light fw-bold product-price me-3">Rp.19.99</span>
                      <button class="btn btn-outline-warning btn-view me-3" data-bs-toggle="modal" data-bs-target="#detailModal_4"><i class="fas fa-solid fa-eye"></i></button>
                      <a href="pembayaran.html"><button class="btn btn-warning btn-add-to-cart" data-id="4" data-name="Product 4" data-price="19.99" data-image="https://via.placeholder.com/300x200">Beli Tiket</button></a>
                  </div>
              </div>
          </div>
      </div>

      <div class="col product-item" data-category="alat">
          <div class="card bg-secondary">
              <img src="asset/img/venue/5.png" class="card-img-top" alt="">
              <div class="card-body">
                  <h5 class="card-title text-light">Lapangan Sepak Bola Mandala</h5>
                  <p class="card-text text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <div class="d-flex">
                      <span class="text-light fw-bold product-price me-3">Rp.19.99</span>
                      <button class="btn btn-outline-warning btn-view me-3" data-bs-toggle="modal" data-bs-target="#detailModal_5"><i class="fas fa-solid fa-eye"></i></button>
                      <a href="pembayaran.html"><button class="btn btn-warning btn-add-to-cart" data-id="5" data-name="Product 5" data-price="19.99" data-image="https://via.placeholder.com/300x200">Beli Tiket</button></a>
                  </div>
              </div>
          </div>
      </div>

      <div class="col product-item" data-category="bahan">
          <div class="card bg-secondary">
              <img src="asset/img/venue/6.png" class="card-img-top" alt="">
              <div class="card-body">
                  <h5 class="card-title text-light">Stadion Lukas Enembe</h5>
                  <p class="card-text text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <div class="d-flex">
                      <span class="text-light fw-bold product-price me-3">Rp.19.99</span>
                      <button class="btn btn-outline-warning btn-view me-3" data-bs-toggle="modal" data-bs-target="#detailModal_6"><i class="fas fa-solid fa-eye"></i></button>
                      <a href="pembayaran.html"><button class="btn btn-warning btn-add-to-cart" data-id="6" data-name="Product 6" data-price="19.99" data-image="https://via.placeholder.com/300x200">Beli Tiket</button></a>
                  </div>
              </div>
          </div>
      </div>

  </div>
</div>

<!-- Modal Detail -->
<div class="modal fade product-list text-dark" id="detailModal_1" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Venue Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="asset/img/venue/1.png" class="img-fluid" alt="Product Image">
                    </div>
                    <div class="col-md-6">
                        <h2>Lapangan Baseball</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet felis vel libero varius sollicitudin at vel ligula.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet felis vel libero varius sollicitudin at vel ligula. Integer consectetur massa eget massa sagittis ultrices.</p>
                        <p><strong>Price: Rp.19.99</strong></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade product-list text-dark" id="detailModal_2" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Venue Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="asset/img/venue/2.png" class="img-fluid" alt="Product Image">
                    </div>
                    <div class="col-md-6">
                        <h2>LAPANGAN VOLI PASIR
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet felis vel libero varius sollicitudin at vel ligula.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet felis vel libero varius sollicitudin at vel ligula. Integer consectetur massa eget massa sagittis ultrices.</p>
                        <p><strong>Price: Rp.19.99</strong></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade product-list text-dark" id="detailModal_3" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Venue Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="asset/img/venue/3.png" class="img-fluid" alt="Product Image">
                    </div>
                    <div class="col-md-6">
                        <h2>GOR Cendrawasih APO
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet felis vel libero varius sollicitudin at vel ligula.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet felis vel libero varius sollicitudin at vel ligula. Integer consectetur massa eget massa sagittis ultrices.</p>
                        <p><strong>Price: Rp.19.99</strong></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade product-list text-dark" id="detailModal_4" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Venue Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="asset/img/venue/4.png" class="img-fluid" alt="Product Image">
                    </div>
                    <div class="col-md-6">
                        <h2>GOR Waringin
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet felis vel libero varius sollicitudin at vel ligula.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet felis vel libero varius sollicitudin at vel ligula. Integer consectetur massa eget massa sagittis ultrices.</p>
                        <p><strong>Price: Rp.19.99</strong></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade product-list text-dark" id="detailModal_5" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Venue Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="asset/img/venue/5.png" class="img-fluid" alt="Product Image">
                    </div>
                    <div class="col-md-6">
                        <h2>Lapangan Sepak Bola Mandala
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet felis vel libero varius sollicitudin at vel ligula.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet felis vel libero varius sollicitudin at vel ligula. Integer consectetur massa eget massa sagittis ultrices.</p>
                        <p><strong>Price: Rp.19.99</strong></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade product-list text-dark" id="detailModal_6" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Venue Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="asset/img/venue/6.png" class="img-fluid" alt="Product Image">
                    </div>
                    <div class="col-md-6">
                        <h2>Stadion Lukas Enembe
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet felis vel libero varius sollicitudin at vel ligula.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet felis vel libero varius sollicitudin at vel ligula. Integer consectetur massa eget massa sagittis ultrices.</p>
                        <p><strong>Price: Rp.19.99</strong></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detail end -->

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

<script>
    $(document).ready(function() {
    readData()
    $("#search-input").keyup(function() {
        var strcari = $("#search-input").val();
        if (strcari != "") {
            $("#search-results-body").html('<tr><td>Mencari...</td></tr>');
            $.ajax({
                type: "get",
                url : "{{ url('ajax') }}",
                data: "name=" + strcari,
                success:function(data) {
                    $("#search-results-body").html(data);
                }
            });
        } else {
            $("#search-results-body").html(''); // Kosongkan hasil pencarian jika kotak pencarian kosong
        }
    });
});


    function readData() {
        $.get("{{ url('read') }}", {},
            function(data, status) {
                $("#search-results-body").html(data);
            });
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="asset/js/style.js"></script>
</body>
</html>
