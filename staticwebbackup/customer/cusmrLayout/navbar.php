<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="logo">
        <img src="../resources/img/icons/pleart.png" alt="Logo" class="logo-image">
        <p>PleeArt.</p>
        <div class="burger" id="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </div>

    <div class="center-items">
        <ul class="nav-links" id="nav-links">
            <div class="search-bar">
                <form action="" method="POST" class="search-input">
                    <label><img src="../resources/img/icons/search.png" alt="search"></label>
                    <input type="text" id="navbarSearchBox" name="query" placeholder="Cari produk...">
                </form>
            </div>
            <li><a href="index.php" class="home">Home</a></li>
            <li><a href="cetak_undangan.php" class="links">Cetak Undangan</a></li>
            <li><a href="services/aboutus.php" class="links">About Us</a></li>
            <li><a href="services/contact.php" class="links">Contact</a></li>
        </ul>
    </div>

    <div class="user-options">
        <!-- Tombol untuk membuka dropdown -->
        <a href="#" class="cart" id="cartButton">
            <img src="../resources/img/icons/shoppingcart.png" alt="Cart">
            <span class="cart-count" id="cart-count" style="display: none;">0</span>
        </a>
    </div>

    <!-- JavaScript -->
    <script>
        // Mengambil elemen tombol keranjang, dropdown, dan count
        const cartButton = document.getElementById('cartButton');
        const cartDropdown = document.getElementById('cartDropdown');
        const cartCount = document.querySelector('.cart-count');

        // Fungsi untuk menampilkan atau menyembunyikan dropdown keranjang
        function toggleCartDropdown() {
            if (cartDropdown.style.display === 'none' || cartDropdown.style.display === '') {
                cartDropdown.style.display = 'block';
            } else {
                cartDropdown.style.display = 'none';
            }
        }

        // Event listener pada tombol keranjang
        cartButton.addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah link agar tidak langsung mengarahkan ke URL lain
            toggleCartDropdown(); // Memanggil fungsi untuk menampilkan atau menyembunyikan dropdown
        });

        // Event listener untuk menutup dropdown jika klik di luar area dropdown
        document.addEventListener('click', function(event) {
            if (!cartButton.contains(event.target) && !cartDropdown.contains(event.target)) {
                cartDropdown.style.display = 'none'; // Sembunyikan dropdown
            }
        });
    </script>
    <script src="../resources/js/livesearch.js"></script>
</body>

</html>