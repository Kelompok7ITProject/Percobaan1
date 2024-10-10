<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - LKP Shafira</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Style Umum */
        body {
            background-color: #b4765e;
            font-family: Arial, sans-serif;
        }

        /* Navbar */
        .navbar {
            background-color: #ffffff;
            padding: 15px;
        }
        .navbar a {
            color: #063307;
            font-weight: bold;
            text-decoration: none;
        }

        /* Konten Utama */
        .main-content {
            display: flex;
            align-items: center;
            padding: 20px;
            color: white;
        }

        /* Ilustrasi dan Badge */
        .illustration {
            position: relative;
            width: 40%;
        }
        .illustration img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .badge-custom {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #FFD700;
            color: black;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .badge-secondary {
            position: absolute;
            bottom: 10px;
            left: 10px;
            background-color: #E0E0E0;
            color: black;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
        }

        /* Konten Teks */
        .text-content {
            width: 50%;
            padding-left: 30px;
        }
        .text-content h1 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .requirements {
            margin-top: 10px;
            list-style-type: none;
            padding: 0;
            font-size: 1.1rem;
        }
        .requirements li {
            display: flex;
            align-items: center;
            margin: 8px 0;
        }
        .requirements li::before {
            content: "📄";
            margin-right: 8px;
            font-size: 1.2rem;
        }

        /* Tombol */
        .btn-group .btn {
            margin-top: 15px;
            padding: 10px 25px;
            font-weight: bold;
            border-radius: 8px;
            font-size: 1rem;
        }
        .btn-primary {
            background-color: #1E90FF;
            border: none;
        }
        .btn-secondary {
            background-color: #2E8B57;
            border: none;
        }

        /* Footer */
        .footer {
            background-color: #F0F0F0;
            color: #4CAF50;
            text-align: center;
            padding: 15px 0;
            font-size: 0.9rem;
        }
        .footer a {
            color: inherit;
            text-decoration: none;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="/logo.png" alt="Logo" style="height: 50px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="/" class="nav-link">Beranda</a></li>
                    <li class="nav-item"><a href="/courses" class="nav-link">Kursus dan Pelatihan</a></li>
                    <li class="nav-item"><a href="/about" class="nav-link">Tentang LKP SHAFIRA</a></li>
                </ul>
                <a href="/login" class="ms-3"><i class="bi bi-person" style="font-size: 1.5rem; color: #4CAF50;"></i></a>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <div class="main-content container mt-5">
        <!-- Ilustrasi dan Badge -->
        <div class="illustration">
            <img src="/images/illustration.png" alt="Illustration">
            <div class="badge-custom">Harga Terjangkau!</div>
            <div class="badge-secondary">Terakreditasi!</div>
        </div>

        <!-- Konten Teks dan Persyaratan -->
        <div class="text-content">
            <h1>Ayo Daftar Kursus dan Pelatihan!</h1>
            <ul class="requirements">
                <li>Mengisi Formulir Pendaftaran</li>
                <li>Fotocopy KTP/Identitas 1 lbr</li>
                <li>Kartu Keluarga (KK) 1 lbr</li>
                <li>Fotocopy Ijazah Akhir 1 lbr</li>
                <li>PasPhoto Ukuran 3 x 4 = 2 lembar</li>
            </ul>
            <div class="btn-group">
                <a href="#" class="btn btn-primary">Daftar Sekarang</a>
                <a href="#" class="btn btn-secondary">Sudah Memiliki Akun?</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-5">
        <div>📞 0813-5091-3838</div>
        <div>
            Follow Us:
            <a href="https://www.facebook.com" target="_blank">Facebook</a> |
            <a href="https://www.instagram.com" target="_blank">Instagram</a> |
            <a href="https://wa.me/081350913838" target="_blank">WhatsApp</a>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
