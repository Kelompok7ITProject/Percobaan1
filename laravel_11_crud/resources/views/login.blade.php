<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LKP SHAFIRA</title>
    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #4CAF50;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .navbar {
            width: 100%;
            background: #fff;
            display: flex;
            justify-content: space-between;
            padding: 10px 50px;
            align-items: center;
            box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
        }
        .navbar-link {
            margin: 0 20px;
            color: #333;
            text-decoration: none;
        }
        .navbar-link:hover {
            color: #4CAF50;
        }
        .logo {
            height: 50px;
        }
        .user-icon {
            height: 30px;
        }
        .content-container {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-top: 20px;
        }
        .info-box {
            background-color: #4CAF50;
            padding: 20px;
            border-radius: 10px;
            color: white;
            text-align: center;
            width: 40%;
            position: relative;
        }
        .info-text {
            font-size: 1.2em;
            margin: 10px 0;
        }
        .yellow {
            background-color: yellow;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .blue {
            background-color: #0058A3;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .illustration {
            margin-top: 20px;
            width: 100%;
            border-radius: 10px;
        }
        .login-box {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 50%;
        }
        .login-logo {
            display: block;
            margin: 0 auto 20px;
            height: 60px;
        }
        .login-form {
            display: flex;
            flex-direction: column;
        }
        .form-label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-input, .form-select {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn-login {
            background-color: #0058A3;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            margin-bottom: 10px;
        }
        .btn-register {
            background-color: #2196F3;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
        }
        .separator {
            text-align: center;
            margin: 10px 0;
            font-size: 0.9em;
            color: #555;
        }
        .footer {
            margin-top: 30px;
            background-color: #333;
            padding: 15px;
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 30px;
            color: #fff;
        }
        .contact-link {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .contact-link img {
            height: 20px;
        }
    </style>
</head>
<body>

<header class="navbar">
    <div class="navbar-logo">
        <img src="{{ asset('images/logo.png') }}" alt="LKP SHAFIRA Logo" class="logo">
        <a href="#" class="navbar-link">Beranda</a>
        <a href="#" class="navbar-link">Kursus dan Pelatihan</a>
        <a href="#" class="navbar-link">Tentang LKP SHAFIRA</a>
    </div>
    <div class="navbar-user">
        <img src="{{ asset('images/user-icon.png') }}" alt="User Icon" class="user-icon">
    </div>
</header>

<div class="content-container">
    <div class="info-box">
        <p class="info-text yellow">Harga Terjangkau!</p>
        <p class="info-text blue">Terakreditasi!</p>
        <img src="{{ asset('images/illustration.png') }}" alt="Illustration" class="illustration">
    </div>

    <div class="login-box">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="login-logo">
        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf
            <label for="username" class="form-label">Username:</label>
            <input type="text" id="username" name="username" class="form-input" required>

            <label for="password" class="form-label">Password:</label>
            <input type="password" id="password" name="password" class="form-input" required>

            <label for="level" class="form-label">Level:</label>
            <select id="level" name="level" class="form-select" required>
                <option value="instruktur">Instruktur</option>
                <option value="siswa">Siswa</option>
            </select>

            <button type="submit" class="btn-login">Masuk</button>
            <p class="separator">Atau</p>
            <button type="button" class="btn-register" onclick="window.location.href='{{ route('register') }}'">Daftar</button>
        </form>
    </div>
</div>

<footer class="footer">
    <div class="contact-info">
        <a href="https://wa.me/081350913838" target="_blank" class="contact-link"><img src="{{ asset('images/whatsapp-icon.png') }}" alt="WhatsApp"> 0813-5091-3838</a>
        <a href="https://facebook.com/lpkShafiracomTala" target="_blank" class="contact-link"><img src="{{ asset('images/facebook-icon.png') }}" alt="Facebook"> lpk Shafiracom Tala</a>
        <a href="https://instagram.com/Shafiracom_Tala" target="_blank" class="contact-link"><img src="{{ asset('images/instagram-icon.png') }}" alt="Instagram"> Shafiracom_Tala</a>
    </div>
</footer>

</body>
</html>
