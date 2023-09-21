// Fungsi untuk mengatur tampilan tombol Back to Top
function toggleBackToTopButton() {
    const btnBackToTop = document.querySelector(".btn-back-to-top");
    if (window.scrollY > window.innerHeight / 2) {
        btnBackToTop.classList.add("show");
    } else {
        btnBackToTop.classList.remove("show");
    }
}

// Event listener untuk menggulir halaman
window.addEventListener("scroll", toggleBackToTopButton);

//filter
document.addEventListener("DOMContentLoaded", function () {
    // Ambil elemen tombol filter
    const filterButtons = document.querySelectorAll(".btn-filter");

    // Ambil elemen daftar produk
    const productItems = document.querySelectorAll(".product-item");

    // Tambahkan event listener untuk setiap tombol filter
    filterButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const category = button.getAttribute("data-filter");

            // Sembunyikan semua produk
            productItems.forEach((item) => {
                item.style.display = "none";
            });

            // Tampilkan produk sesuai kategori yang dipilih
            if (category === "all") {
                productItems.forEach((item) => {
                    item.style.display = "block";
                });
            } else {
                const filteredItems = document.querySelectorAll(
                    `[data-category="${category}"]`
                );
                filteredItems.forEach((item) => {
                    item.style.display = "block";
                });
            }
        });
    });
});

// Ambil semua tombol filter
const filterButtons = document.querySelectorAll(".btn-filter");

// Tambahkan event listener untuk setiap tombol filter
filterButtons.forEach((button) => {
    button.addEventListener("click", () => {
        // Hapus kelas 'active' dari semua tombol filter
        filterButtons.forEach((btn) => btn.classList.remove("active"));
        // Tambahkan kelas 'active' pada tombol yang diklik
        button.classList.add("active");
    });
});

// Fungsi untuk menambahkan produk ke keranjang
const cart = [];
function addToCart(id, name, price, image) {
    const existingItem = cart.find((item) => item.id === id);
    if (existingItem) {
        existingItem.quantity++;
        existingItem.total = existingItem.price * existingItem.quantity;
    } else {
        cart.push({ id, name, price, quantity: 1, image, total: price });
    }
    // Perbarui tampilan keranjang
    updateCartUI();
}

// Fungsi untuk menghapus produk dari keranjang
function removeCartItem(id) {
    const index = cart.findIndex((item) => item.id === id);
    if (index !== -1) {
        cart.splice(index, 1);
        updateCartUI();
    }
}

// Fungsi untuk memperbarui tampilan keranjang
function updateCartUI() {
    const cartItems = document.getElementById("cart-items");
    cartItems.innerHTML = "";

    cart.forEach((item) => {
        const row = document.createElement("tr");
        row.innerHTML = `
      <td>
          <div class="d-flex align-items-center">
              <img src="${item.image}" alt="${
            item.name
        }" class="cart-item-image">
              <div class="ms-3">${item.name}</div>
          </div>
      </td>
      <td>$${item.price.toFixed(2)}</td>
      <td>
          <input type="number" class="form-control quantity-input" data-item-id="${
              item.id
          }" value="${item.quantity}" min="1">
      </td>
      <td>$${item.total.toFixed(2)}</td>
      <td>
          <button class="btn btn-danger btn-remove" data-item-id="${
              item.id
          }"><i class="fas fa-trash"></i></button>
      </td>
    `;
        cartItems.appendChild(row);

        // Tambahkan event listener untuk setiap input kuantitas
        const quantityInput = row.querySelector(".quantity-input");
        quantityInput.addEventListener("input", () => {
            const newQuantity = parseInt(quantityInput.value);
            if (!isNaN(newQuantity) && newQuantity >= 1) {
                updateCartItemQuantity(item.id, newQuantity);
            }
        });

        // Tambahkan event listener untuk setiap tombol hapus
        const removeButton = row.querySelector(".btn-remove");
        removeButton.addEventListener("click", () => {
            removeCartItem(item.id);
        });
    });

    // ...
}

// Fungsi untuk memperbarui kuantitas produk di keranjang
function updateCartItemQuantity(id, newQuantity) {
    const cartItem = cart.find((item) => item.id === id);
    cartItem.quantity = newQuantity;
    cartItem.total = cartItem.price * cartItem.quantity;
    updateCartUI();
}

// Tangkap tombol "Add to Cart" saat diklik
const addToCartButtons = document.querySelectorAll(".btn-add-to-cart");
addToCartButtons.forEach((button) => {
    button.addEventListener("click", () => {
        const id = button.getAttribute("data-id");
        const name = button.getAttribute("data-name");
        const price = parseFloat(button.getAttribute("data-price"));
        const image = button.getAttribute("data-image");
        addToCart(id, name, price, image);
    });
});

// Tangkap tombol "Add to Cart" pada modal detail produk
const detailAddToCartButton = document.querySelector(
    "#detailModal .btn-add-to-cart"
);
detailAddToCartButton.addEventListener("click", () => {
    const id = detailAddToCartButton.getAttribute("data-id");
    const name = detailAddToCartButton.getAttribute("data-name");
    const price = parseFloat(detailAddToCartButton.getAttribute("data-price"));
    const image = detailAddToCartButton.getAttribute("data-image");
    addToCart(id, name, price, image);
    // Sembunyikan modal detail produk setelah produk ditambahkan ke keranjang
    const detailModal = new bootstrap.Modal(
        document.getElementById("detailModal")
    );
    detailModal.hide();
});

// Memanggil fungsi updateCartUI() untuk memperbarui tampilan awal keranjang
updateCartUI();

// Inisialisasi Slick Carousel pada testimoni-carousel

$(document).ready(function () {
    $(".testimoni-carousel").slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        prevArrow: null, // Tidak menampilkan tombol prev
        nextArrow: null, // Tidak menampilkan tombol next
    });
});

function initMap() {
    const jayapura = { lat: -2.5489, lng: 140.7198 }; // Koordinat Jayapura, Papua, Indonesia
    const map = new google.maps.Map(document.getElementById("map"), {
        center: jayapura,
        zoom: 15,
    });
    const marker = new google.maps.Marker({
        position: jayapura,
        map: map,
    });
}

// Fungsi untuk mencari produk berdasarkan kata kunci
function searchProducts(keyword) {
    // Di sini Anda dapat melakukan pencarian produk sesuai dengan basis data Anda
    // Misalnya, Anda dapat mengirim permintaan ke server atau melakukan operasi pencarian pada array produk
    // Kemudian, tampilkan hasil pencarian sesuai dengan desain tampilan yang Anda inginkan
    // Contoh:
    // ...
}

// Fungsi untuk menangani klik tombol pencarian
document.getElementById("search-button").addEventListener("click", function () {
    const searchInput = document.getElementById("search-input");
    const keyword = searchInput.value.trim();
    if (keyword !== "") {
        searchProducts(keyword);
    }
});

// Fungsi untuk menangani pencarian saat tombol "Enter" ditekan
document
    .getElementById("search-input")
    .addEventListener("keydown", function (event) {
        if (event.key === "Enter") {
            const keyword = event.target.value.trim();
            if (keyword !== "") {
                searchProducts(keyword);
            }
        }
    });

// Variabel status login (contoh: jika pengguna sudah login)
const isLoggedIn = true;

// Ambil elemen ikon profil dan dropdown
const profileIcon = document.getElementById("profileIcon");
const profileDropdown = document.getElementById("profileDropdown");

// Tampilkan ikon profil jika pengguna sudah login
if (isLoggedIn) {
    profileIcon.style.display = "block";
}

// Tambahkan event listener untuk ikon profil
profileIcon.addEventListener("click", () => {
    // Toggle visibilitas dropdown saat ikon diklik
    profileDropdown.style.display =
        profileDropdown.style.display === "block" ? "none" : "block";
});

$(document).ready(function () {
    // Variabel status login (contoh: jika pengguna belum login)
    const isLoggedIn = false;

    // Ambil elemen ikon profil
    const profileIcon = $(".profile-icon");

    // Jika pengguna belum login, sembunyikan ikon profil
    if (!isLoggedIn) {
        profileIcon.hide();
    }
});
