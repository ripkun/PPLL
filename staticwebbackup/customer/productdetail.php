<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan</title>
    <link rel="icon" href="../resources/img/icons/pleart.png" type="image/png">
    <link rel="stylesheet" href="../resources/css/navbar.css">
    <link rel="stylesheet" href="../resources/css/productdetail.css">
</head>

<body>
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar">
            <?php include 'cusmrLayout/navbar.php'; ?>
        </nav>
        <!-- Menampilkan hasil pencarian -->
        <div id="navbarSearchResults" class="search-results">
            <!-- Hasil pencarian akan ditampilkan di sini -->
        </div>

        <div class="content">
            <div class="content-detail">
                <div class="product-detail">
                    <!-- Section Gambar -->
                    <div class="image-gallery">
                        <div class="image-zoom">
                            <div class="main-image" onmousemove="zoomImage(event)" onmouseleave="resetImage()">
                                <img id="mainImage" src="../resources/img/homeimg/khitanan.jpeg" alt="Product Image">
                            </div>
                        </div>
                        <div class="thumbnail-images">
                            <img src="../resources/img/homeimg/khitanan.jpeg" alt="Thumbnail 1" class="thumb"
                                onclick="changeImage(this)">
                            <img src="../resources/img/homeimg/pernikahan.jpg" alt="Thumbnail 2" class="thumb"
                                onclick="changeImage(this)">
                            <img src="../resources/img/homeimg/ulangtahun.jpeg" alt="Thumbnail 3" class="thumb"
                                onclick="changeImage(this)">
                        </div>
                    </div>

                    <!-- Section Informasi Produk -->
                    <div class="product-info">
                        <!-- Nama produk -->
                        <h1>Undangan Khitanan Premium</h1>

                        <!-- Harga produk -->
                        <p class="price">Rp. 15.000/Lembar</p>

                        <div class="description">
                            <h4>Deskripsi Produk</h4>
                            <p>Undangan khitanan dengan desain premium yang elegan dan modern. Cocok untuk acara khitanan yang berkesan.</p>
                        </div>

                        <!-- Inputan Kuantitas -->
                        <div class="quantity">
                            <button class="order-btn" onclick="redirectToWA()">
                                <img src="../resources/img/icons/cart.png" class="cart-icon" alt="">
                                Pesan Sekarang
                            </button>
                        </div>

                        <h2>Undangan Lainnya</h2>
                        <div class="product-container">
                            <div class="product-card">
                                <img class="product" src="../resources/img/homeimg/pernikahan.jpg" alt="Undangan Pernikahan">
                                <p class="product-name">Undangan Pernikahan</p>
                                <div class="description">
                                    <h6>Deskripsi Produk</h6>
                                    <p>Undangan pernikahan dengan desain elegan dan romantis.</p>
                                </div>
                                <p class="product-price">Rp. 20.000</p>
                                <a href="productdetail.php" class="detail-button">
                                    <img class="cart-icon" src="../resources/img/icons/cart.png" alt="">
                                    <p>Lihat Detail</p>
                                </a>
                            </div>
                            <div class="product-card">
                                <img class="product" src="../resources/img/homeimg/ulangtahun.jpeg" alt="Undangan Ulang Tahun">
                                <p class="product-name">Undangan Ulang Tahun</p>
                                <div class="description">
                                    <h6>Deskripsi Produk</h6>
                                    <p>Undangan ulang tahun dengan desain ceria dan menarik.</p>
                                </div>
                                <p class="product-price">Rp. 12.000</p>
                                <a href="productdetail.php" class="detail-button">
                                    <img class="cart-icon" src="../resources/img/icons/cart.png" alt="">
                                    <p>Lihat Detail</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Overlay -->
        <div id="overlay" class="overlay">
            <div class="overlay-content">
                <div class="checkmark-container">
                    <div class="checkmark-circle">
                        <div class="checkmark">✓</div>
                    </div>
                </div>
                <p id="overlayMessage"></p>
                <a href="javascript:hideOverlay()" class="btn-lanjut">Lanjut Belanja</a>
            </div>
        </div>
    </div>

    <script src="../resources/js/thumnail.js"></script>
    <script src="../resources/js/zoomimage.js"></script>
    <script src="../resources/js/overlay.js"></script>
    <script>
        function redirectToWA() {
            // nomor WA tujuan (pakai format internasional, tanpa +, tanpa 0 di depan)
            let phoneNumber = "6287853338254";

            // pesan default
            let message = "Halo, saya ingin memesan produk ini.";

            // redirect ke WA
            window.location.href = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
        }
    </script>
    <script src="../resources/js/burgersidebar.js"></script>
</body>

</html>