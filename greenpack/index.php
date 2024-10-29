<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenPack - Home</title>
    
    <!-- Tambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tambahkan Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Link ke Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Playfair+Display:wght@400;700&family=Montserrat:wght@400;700&family=Lora:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* CSS untuk mengatur ukuran grafik agar sesuai lebar layar */
        #thinkwoodChart {
            width: 100%;
            height: 300px; /* Sesuaikan tinggi grafik */
        }

        /* Font untuk bagian beranda */
        .welcome-text {
            font-family: 'Roboto', sans-serif;
        }

        /* Font untuk bagian tentang kami */
        .about-us {
            font-family: 'Playfair Display', serif;
        }

        /* Font untuk bagian produk unggulan kami dan penggunaan thinkWood */
        .section-title {
            font-family: 'Playfair Display', serif;
        }

        /* Font untuk bagian kontak kami */
        .contact-info {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>
<body>
    <header>
        <h1 class="welcome-text">Selamat datang di GreenPack</h1>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="catalog.php">Katalog</a></li>
                <li><a href="order.php">Pemesanan</a></li>
                <li><a href="sustainability.php">Edukasi</a></li>
                <li><a href="impact.php">Pelacakan Dampak</a></li>
                <li><a href="forum.php">Komunitas</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2 class="about-us">Tentang Kami</h2>
        <p class="about-us">Pada tahun 2009, PT. Keong Nusantara Abadi meluncurkan sebuah divisi baru bernama thinkWood, yang berfokus pada produksi kemasan kayu dari bahan Kayu Sengon. Divisi ini diciptakan dengan orientasi pasar ekspor, sebagai bagian dari strategi ekspansi perusahaan untuk menjangkau pasar global yang semakin peduli terhadap praktik bisnis berkelanjutan dan ramah lingkungan.

thinkWood memberikan nilai tambah bagi Wong Coco Group, induk perusahaan dari PT. Keong Nusantara Abadi, dengan memperkuat citra mereka sebagai perusahaan yang berkomitmen pada keberlanjutan lingkungan. Melalui produksi kemasan yang ramah lingkungan, Wong Coco Group tidak hanya memenuhi kebutuhan pasar internasional akan kemasan berkualitas tinggi, tetapi juga mendukung inisiatif global dalam menjaga kelestarian hutan dan mengurangi jejak karbon. </p>
        
        <!-- Menambahkan carousel -->
<section>
    <h3 class="section-title">Produk Unggulan Kami</h3>
    <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/katalog1.jpg" class="d-block w-100" alt="Kemasan Kayu 1" style="object-fit: cover; max-height: 400px;">
            </div>
            <div class="carousel-item">
                <img src="image/katalog2.jpg" class="d-block w-100" alt="Kemasan Kayu 2" style="object-fit: cover; max-height: 400px;">
            </div>
            <div class="carousel-item">
                <img src="image/katalog3.jpg" class="d-block w-100" alt="Kemasan Kayu 3" style="object-fit: cover; max-height: 400px;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- Menambahkan Diagram Grafik -->
<section>
    <h3 class="section-title">Penggunaan thinkWood sebagai Kemasan</h3>
    <canvas id="thinkwoodChart"></canvas>
</section>

    
    <!-- Menambahkan kontak dan alamat -->
    <footer>
        <p class="contact-info"><strong>Kontak Kami:</strong></p>
        <ul class="contact-info">
            <li>Alamat: Jl. Raya Bogo - Kunjang RT08 / RW01, Desa Mojoayu, Mojoayu, Kec. Plemahan, Kabupaten Kediri, Jawa Timur 64156, Indonesia</li>
            <li>Email: www.wongcoco.id</li>
            <li>Telepon: (0354) 526251</li>
        </ul>
        <p class="contact-info">&copy; 2024 GreenPack. All rights reserved.</p>
    </footer>

    <!-- Tambahkan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script untuk menampilkan diagram Chart.js -->
    <script>
        var ctx = document.getElementById('thinkwoodChart').getContext('2d');
        var thinkwoodChart = new Chart(ctx, {
            type: 'bar', // jenis grafik (bar, line, pie, dll)
            data: {
                labels: ['2018', '2019', '2020', '2021', '2022', '2023'], // Label sumbu X (tahun)
                datasets: [{
                    label: 'Penggunaan thinkWood (ton)',
                    data: [120, 150, 180, 200, 250, 300], // Data sumbu Y (penggunaan)
                    backgroundColor: 'rgba(0, 128, 0, 0.2)', // Warna latar belakang batang
                    borderColor: 'rgba(0, 128, 0, 1)', // Warna garis tepi batang
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>




