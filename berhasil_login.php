<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit(); // Terminate script execution after the redirect
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Dashboard Laundry</title>
</head>
<body>
    <!-- Header / Navbar -->
    <header class="header">
        <h1>Laundry Clean & Fresh</h1>
        <nav>
            <a href="#layanan">Layanan</a>
            <a href="#pesanan">Pesanan Saya</a>
            <a href="#promo">Promo</a>
            <a href="#kontak">Kontak</a>
            <form action="logout.php" method="POST" style="display:inline;">
                <button type="submit" class="btn">Logout</button>
            </form>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
        <p>Selamat datang di <b>Laundry Clean & Fresh</b></p>
        <p>IP Server: <?php echo $_SERVER['SERVER_ADDR']; ?></p>
        <a href="#pesanan" class="btn">Pesan Sekarang</a>
    </section>

    <!-- Layanan Laundry -->
    <section id="layanan" class="services">
        <h2>Layanan Kami</h2>
        <div class="cards">
            <div class="card">
                <h3>Cuci & Setrika</h3>
                <p>Rp15.000 / kg - 1 Hari</p>
            </div>
            <div class="card">
                <h3>Cuci Kering</h3>
                <p>Rp20.000 / kg - 2 Hari</p>
            </div>
            <div class="card">
                <h3>Sepatu & Tas</h3>
                <p>Rp30.000 / item - 1-2 Hari</p>
            </div>
            <div class="card">
                <h3>Antar Jemput</h3>
                <p>Gratis antar untuk minimal 5 kg</p>
            </div>
        </div>
    </section>

    <!-- Form Pesanan -->
    <section id="pesanan" class="order">
        <h2>Pesanan Saya</h2>
        <form class="order-form">
            <label>Jenis Layanan</label>
            <select>
                <option>Cuci & Setrika</option>
                <option>Cuci Kering</option>
                <option>Sepatu & Tas</option>
            </select>
            <label>Berat / Jumlah</label>
            <input type="number" placeholder="Kg / Item">
            <label>Estimasi Selesai</label>
            <input type="date">
            <button class="btn" type="submit">Kirim Pesanan</button>
        </form>
    </section>

    <!-- Promo -->
    <section id="promo" class="promo">
        <h2>Promo Terbaru</h2>
        <p>Diskon 10% untuk pelanggan baru!</p>
        <p>Gratis antar untuk minimal 5 kg.</p>
    </section>

    <!-- Kontak -->
    <section id="kontak" class="contact">
        <h2>Kontak Kami</h2>
        <p>Alamat: Jl. Kebersihan No.1, Kota Bersih</p>
        <p>Jam Operasional: 08.00 - 20.00</p>
        <p>WhatsApp: 0812-XXXX-XXXX</p>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Laundry Clean & Fresh. All rights reserved.</p>
    </footer>
</body>
</html>
