<?php
require_once 'config.php';
$all_barang_items = getAllBarang($conn);
session_start();

$nama_kantin_hardcode = [
    'Kantin Ceria Lezat',
    'Warung Sehat Alami',
    'Pojok Kenyang Mantap',
    'Kedai Minuman Segar Jaya'
];
$item_per_kantin_display = 4; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body style="padding-top: 56px;"> <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold text-danger" href="#">Kantin-Telkom</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavMain">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavMain">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#about">About Kantin</a></li>
                <li class="nav-item"><a class="nav-link" href="#cafetaria">Cafetaria List</a></li>
                <li class="nav-item"><a class="nav-link" href="#how-to-buy">How to buy</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>

<section id="about" class="container py-5"> <div class="text-center"><h2 class="mb-4 display-5 fw-medium">About Kantin</h2></div>
    <div class="row align-items-center">
        <div class="col-lg-6"><h3 class="text-danger">Selamat Datang!</h3><p class="lead">di Kantin <b>SMK TELKOM JAKARTA!</b> Kantin kami menyediakan berbagai pilihan makanan dan minuman sehat untuk mendukung aktivitas belajar siswa. Dengan suasana yang nyaman dan pelayanan ramah, kami berkomitmen memberikan yang terbaik untuk seluruh warga sekolah.</p></div>
        <div class="col-lg-6">
            <div class="mb-3 rounded bg-light d-flex align-items-center justify-content-center" style="min-height: 200px;">
                <img src="./image/kantin1.jpg" alt="Foto Kantin Sekolah" class="img-fluid rounded w-100" style="object-fit: cover; max-height: 300px;">
            </div>
            <div class="rounded bg-light d-flex align-items-center justify-content-center" style="min-height: 200px;">
                 <video src="./video/kantin.mp4" alt="Video Suasana Kantin" class="img-fluid rounded w-100" autoplay controls muted loop style="max-height: 300px;"></video>
            </div>
        </div>
    </div>
</section>
<hr class="my-5"> <section id="cafetaria" class="bg-body-tertiary py-5"> <div class="container">
        <div class="text-center"><h2 class="mb-5 display-5 fw-medium">Cafetaria List</h2></div>

        <div id="kantin-ceria-lezat" class="mb-5 p-4 rounded shadow-sm bg-white">
            <h3 class="text-dark mb-3 border-bottom pb-2">Kantin Ceria lezat</h3>
            <div class="rounded mb-3 bg-light d-flex align-items-center justify-content-center" style="min-height: 200px;">
                <img src="./image/kantin1.jpg" alt="Kantin Ceria Lezat" class="img-fluid rounded w-100" style="object-fit: cover; max-height: 350px;">
            </div>
            <p class="mt-4">Kantin dengan berbagai pilihan makanan tradisional dan minuman segar.</p>
            <h5 class="mt-4">Menu Tersedia:</h5>
            <div class="row mt-3 g-3">
                <div class="col-md-6 col-lg-3">
                    <div class="card menu-item-card h-100">
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="min-height: 150px;">
                            <img src="./image/nasi_ayam_pop.jpeg" alt="Nasi Ayam Pop" class="img-fluid rounded" style="max-height: 180px; object-fit: contain;">
                        </div>
                        <div class="card-body text-center">
                           <h5 class="card-title">Nasi Ayam Pop</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card menu-item-card h-100">
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="min-height: 150px;">
                            <img src="./image/soto_betawi.jpg" alt="Soto Betawi" class="img-fluid rounded" style="max-height: 180px; object-fit: contain;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Soto Betawi</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card menu-item-card h-100">
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="min-height: 150px;">
                            <img src="./image/gado-gado.jpeg" alt="Gado-Gado Spesial" class="img-fluid rounded" style="max-height: 180px; object-fit: contain;">
                        </div>
                         <div class="card-body text-center">
                            <h5 class="card-title">Gado-Gado Spesial</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card menu-item-card h-100">
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="min-height: 150px;">
                            <img src="./image/es_campur.jpg" alt="Es Campur Pelangi" class="img-fluid rounded" style="max-height: 180px; object-fit: contain;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Es Campur Pelangi</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="kantin-sehat-alami" class="mb-5 p-4 rounded shadow-sm bg-white">
            <h3 class="text-dark mb-3 border-bottom pb-2">Kantin Sehat Alami</h3>
            <div class="rounded mb-3 bg-light d-flex align-items-center justify-content-center" style="min-height: 200px;">
                <img src="./image/kantin2.jpg" alt="Kantin Sehat Alami" class="img-fluid rounded w-100" style="object-fit: cover; max-height: 350px;">
            </div>
            <p class="mt-4">Menyajikan hidangan sehat dan alami untuk menjaga vitalitas Anda.</p>
            <h5 class="mt-4">Menu Tersedia:</h5>
            <div class="row mt-3 g-3">
                <div class="col-md-6 col-lg-3">
                    <div class="card menu-item-card h-100">
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="min-height: 150px;">
                            <img src="./image/kantin_sehat_alami/nasi_merah.jpeg" alt="Paket Nasi Merah Ayam Kukus" class="img-fluid rounded" style="max-height: 180px; object-fit: contain;">
                        </div>
                        <div class="card-body text-center">
                           <h5 class="card-title">Paket Nasi Merah Ayam Kukus</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card menu-item-card h-100">
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="min-height: 150px;">
                           <img src="./image/kantin_sehat_alami/salad.jpg" alt="Salad Sayur Organik" class="img-fluid rounded" style="max-height: 180px; object-fit: contain;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Salad Sayur Organik</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card menu-item-card h-100">
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="min-height: 150px;">
                            <img src="./image/kantin_sehat_alami/jus_tomat.jpeg" alt="Jus Wortel Tomat" class="img-fluid rounded" style="max-height: 180px; object-fit: contain;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Jus Wortel Tomat</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card menu-item-card h-100">
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="min-height: 150px;">
                            <img src="./image/kantin_sehat_alami/karedok.jpg" alt="Karedok" class="img-fluid rounded" style="max-height: 180px; object-fit: contain;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Karedok</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="kantin-kenyang-mantap" class="mb-5 p-4 rounded shadow-sm bg-white">
            <h3 class="text-dark mb-3 border-bottom pb-2">Kantin Kenyang Mantap</h3>
            <div class="rounded mb-3 bg-light d-flex align-items-center justify-content-center" style="min-height: 200px;">
                <img src="./image/kantin3.jpg" alt="Kantin Kenyang Mantap" class="img-fluid rounded w-100" style="object-fit: cover; max-height: 350px;">
            </div>
            <p class="mt-4">Pilihan menu yang mengenyangkan dengan cita rasa yang mantap.</p>
            <h5 class="mt-4">Menu Tersedia:</h5>
            <div class="row mt-3 g-3">
                <div class="col-md-6 col-lg-3">
                    <div class="card menu-item-card h-100">
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="min-height: 150px;">
                            <img src="./image/kantin_pojok/mie_ayam.jpeg" alt="Mie Ayam Bakso Jumbo" class="img-fluid rounded" style="max-height: 180px; object-fit: contain;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Mie Ayam Bakso Jumbo</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card menu-item-card h-100">
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="min-height: 150px;">
                            <img src="./image/kantin_pojok/nasi_uduk.jpg" alt="Nasi Uduk Komplit" class="img-fluid rounded" style="max-height: 180px; object-fit: contain;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Nasi Uduk Komplit</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card menu-item-card h-100">
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="min-height: 150px;">
                            <img src="./image/kantin_pojok/pempek.jpg" alt="Pempek Kapal Selam" class="img-fluid rounded" style="max-height: 180px; object-fit: contain;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Pempek Kapal Selam</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card menu-item-card h-100">
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="min-height: 150px;">
                            <img src="./image/kantin_pojok/Es Teh Tarik.jpeg" alt="Es Teh Tarik" class="img-fluid rounded" style="max-height: 180px; object-fit: contain;">
                        </div>
                        <div class="card-body text-center">
                           <h5 class="card-title">Es Teh Tarik</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="kantin-minuman-segar-jaya" class="mb-5 p-4 rounded shadow-sm bg-white">
            <h3 class="text-dark mb-3 border-bottom pb-2">Kantin Minuman Segar Jaya</h3>
            <div class="rounded mb-3 bg-light d-flex align-items-center justify-content-center" style="min-height: 200px;">
                <img src="./image/kantin4.jpg" alt="Kantin Minuman Segar Jaya" class="img-fluid rounded w-100" style="object-fit: cover; max-height: 350px;">
            </div>
            <p class="mt-4">Aneka minuman segar pelepas dahaga untuk menemani harimu.</p>
            <h5 class="mt-4">Menu Tersedia:</h5>
            <div class="row mt-3 g-3">
                <div class="col-md-6 col-lg-3">
                    <div class="card menu-item-card h-100">
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="min-height: 150px;">
                           <img src="./image/kantin_Minuman_Segar_Jaya/alpukat.jpg" alt="Es Alpukat Kerok" class="img-fluid rounded" style="max-height: 180px; object-fit: contain;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Es Alpukat Kerok</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card menu-item-card h-100">
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="min-height: 150px;">
                            <img src="./image/kantin_Minuman_Segar_Jaya/thaitea.jpg" alt="Thai Tea Original" class="img-fluid rounded" style="max-height: 180px; object-fit: contain;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Thai Tea Original</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card menu-item-card h-100">
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="min-height: 150px;">
                            <img src="./image/kantin_Minuman_Segar_Jaya/Kopi Susu Gula Aren.jpeg" alt="Kopi Susu Gula Aren" class="img-fluid rounded" style="max-height: 180px; object-fit: contain;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Kopi Susu Gula Aren</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card menu-item-card h-100">
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="min-height: 150px;">
                            <img src="./image/kantin_Minuman_Segar_Jaya/Smoothies Buah Naga.jpg" alt="Smoothies Buah Naga" class="img-fluid rounded" style="max-height: 180px; object-fit: contain;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Smoothies Buah Naga</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="how-to-buy" class="container py-5"> <div class="text-center">
        <h2 class="mb-3 display-5 fw-medium">How to buy</h2>
    </div>
    <?php
    $item_offset_howtobuy = 0;
    if (!is_array($all_barang_items)) {
        $all_barang_items = [];
    }
    foreach ($nama_kantin_hardcode as $nama_kantin_display):
    ?>
        <div class="mb-5">
            <h3 class="text-dark mb-3 border-bottom pb-2"><?php echo htmlspecialchars($nama_kantin_display); ?></h3>
            <div class="row g-4">
            <?php
            $menu_di_kantin_harga = array_slice($all_barang_items, $item_offset_howtobuy, $item_per_kantin_display);
            if (!empty($menu_di_kantin_harga)):
                foreach ($menu_di_kantin_harga as $menu_item):
            ?>
            <div class="col-md-6 col-lg-3">
                <div class="card menu-item-card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo htmlspecialchars($menu_item['nama_barang']); ?></h5>
                        <p class="card-text fw-bold text-danger fs-5">Rp <?php echo number_format($menu_item['harga_barang'], 0, ',', '.'); ?></p>
                        <p class="card-text"><small class="text-muted">Stok: <span class="stok-display" id="stok-<?php echo $menu_item['barang_id']; ?>"><?php echo $menu_item['stok_barang']; ?></span></small></p>
                        <button class="btn btn-danger mt-auto add-to-cart-btn" data-id="<?php echo $menu_item['barang_id']; ?>" data-name="<?php echo htmlspecialchars($menu_item['nama_barang']); ?>" data-price="<?php echo $menu_item['harga_barang']; ?>" data-stok-asli="<?php echo $menu_item['stok_barang']; ?>" <?php echo ($menu_item['stok_barang'] <= 0) ? 'disabled' : ''; ?>>
                            Tambah
                        </button>
                    </div>
                </div>
            </div>
            <?php
                endforeach;
            else:
                    echo "<p class='col-12 text-muted fst-italic'>Menu belum tersedia untuk kantin ini.</p>";
            endif;
            $item_offset_howtobuy += $item_per_kantin_display;
            if ($item_offset_howtobuy >= count($all_barang_items) && count($all_barang_items) > 0) {
            }
            ?>
        </div></div>
    <?php endforeach; ?>
    
    <div id="inline-cart-section" class="mt-5 p-4 border rounded shadow-sm bg-light">
        <h3 class="mb-4 text-center border-bottom pb-3">Keranjang & Pembayaran</h3>
        <div class="row">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <h4>Item di Keranjang:</h4>
                <div id="cart-items-inline" class="mb-3 bg-white p-3 rounded" style="min-height: 100px; max-height: 300px; overflow-y: auto;">
                    <p id="empty-cart-msg-inline" class="text-center text-muted fst-italic">Keranjang masih kosong.</p>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center fs-4 fw-bold my-3">
                    <span>Total Harga:</span>
                    <span id="total-price-inline" class="text-danger">Rp 0</span>
                </div>
                <button id="checkout-btn-inline" class="btn btn-danger btn-lg w-100" disabled>
                    Bayar Sekarang
                </button>
            </div>

            <div class="col-lg-5">
                <div id="qr-code-container-inline" class="d-none p-3 border rounded bg-white shadow-sm h-100 text-center">
                    <h5 class="mb-3">Scan QR Code Ini (Dummy):</h5>
                    <img src="./image/dummy_qr.png" alt="Dummy QR Code Pembayaran" id="qr-code-img-inline" class="img-fluid d-block mx-auto rounded" style="max-width: 200px;">
                    <p class="text-muted mt-2 small">Ini adalah simulasi pembayaran.</p>
                </div>
            </div>
        </div>
    </div>

</section>
<hr class="my-5"> <section id="contact" class="bg-body-tertiary py-5"> <div class="container">
        <div class="text-center">
            <h2 class="mb-4 display-5 fw-medium">Hubungi Kami</h2>
        </div>
        <?php if (isset($_SESSION['notification'])): ?>
            <div class="alert alert-info text-center col-md-8 col-lg-6 mx-auto">
                <?php echo $_SESSION['notification']; unset($_SESSION['notification']); ?>
            </div><?php endif; ?>
        <form action="submit.php" method="POST" class="col-md-8 col-lg-6 mx-auto">
            <div class="mb-3">
                <label for="nama" class="form-label fw-medium">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required placeholder="Nama lengkap">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fw-medium">Email</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="email@contoh.com">
            </div>
            <div class="mb-3">
                <label for="pesan" class="form-label fw-medium">Pesan</label>
                <textarea class="form-control" id="pesan" name="pesan" rows="5" required placeholder="Pesan Anda..."></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-dark btn-lg px-5">Kirim</button>
            </div>
        </form>
    </div>
</section>

<footer class="text-center py-2 bg-dark"> <p class="mb-0 text-light">Created by <span class="text-warning fw-bold"></span></p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>
<?php
if (isset($conn)) { $conn->close(); }
?>
