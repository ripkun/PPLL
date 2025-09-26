<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Undangan Pernikahan</title>
        <link rel="icon" href="../resources/img/icons/pleart.png" type="image/png">
        <link rel="stylesheet" href="../resources/css/dashboard.css">
        <link rel="stylesheet" href="../resources/css/navbar.css">
    </head>

    <body>
        <div class="container">
            <!-- Navbar -->
            <nav class="navbar">
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
            </nav>

            <!-- Menampilkan hasil pencarian -->
            <div id="navbarSearchResults" class="search-results">
                <!-- Hasil pencarian akan ditampilkan di sini -->
            </div>

            <!-- Items Product -->
            <div class="product-container">
                <div class="product-content">

                    <!-- Product 1 -->
                    <div class="product-card">
                        <img class="product" src="../resources/img/homeimg/pernikahan.jpg" alt="Undangan Pernikahan">

                        <p class="product-name">Undangan Pernikahan Elegan</p>
                        <p class="product-price">Rp. 30.000</p>
                        <p class="category">Kategori: Pernikahan</p>
                        <div class="description">
                            <p>Undangan pernikahan dengan desain yang elegan dan romantis. Cocok untuk momen spesial pernikahan Anda.</p>
                        </div>

                        <a href="productdetail.php" class="detail-button">Detail</a>
                        <a href="https://wa.me/6287853338254?text=Halo, saya ingin memesan Undangan Pernikahan Elegan (Rp 30.000)"
                            target="_blank" class="detail-button">Pesan di WhatsApp</a>
                    </div>

                    <!-- Product 2 -->
                    <div class="product-card">
                        <img class="product" src="../resources/img/homeimg/pernikahan.jpg" alt="Undangan Pernikahan Premium">

                        <p class="product-name">Undangan Pernikahan Premium</p>
                        <p class="product-price">Rp. 45.000</p>
                        <p class="category">Kategori: Pernikahan</p>
                        <div class="description">
                            <p>Undangan pernikahan premium dengan kualitas cetak terbaik dan desain yang lebih mewah.</p>
                        </div>

                        <a href="productdetail.php" class="detail-button">Detail</a>
                        <a href="https://wa.me/6287853338254?text=Halo, saya ingin memesan Undangan Pernikahan Premium (Rp 45.000)"
                            target="_blank" class="detail-button">Pesan di WhatsApp</a>
                    </div>

                </div>
            </div>

            <script src="../resources/js/burgersidebar.js"></script>

            <!-- JavaScript for cart functionality -->
            <script>
                const cartButton = document.getElementById('cartButton');
                const cartDropdown = document.getElementById('cartDropdown');

                function toggleCartDropdown() {
                    if (cartDropdown.style.display === 'none' || cartDropdown.style.display === '') {
                        cartDropdown.style.display = 'block';
                    } else {
                        cartDropdown.style.display = 'none';
                    }
                }

                cartButton.addEventListener('click', function(event) {
                    event.preventDefault();
                    toggleCartDropdown();
                });

                document.addEventListener('click', function(event) {
                    if (!cartButton.contains(event.target) && !cartDropdown.contains(event.target)) {
                        cartDropdown.style.display = 'none';
                    }
                });
            </script>
        </div>
    </body>

</php>