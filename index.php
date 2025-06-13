<?php
session_start(); // Mulai session di setiap halaman yang membutuhkannya
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="public/css/style.css">
    <style>
        /* Style umum */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Container */
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }

        /* Heading */
        h1 {
            font-size: 24px;
            color: #333;
        }

        /* Navigasi */
        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline-block;
            margin: 10px;
        }

        nav ul li a {
            text-decoration: none;
            padding: 10px 15px;
            color: white;
            background: #007bff;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        nav ul li a:hover {
            background: #0056b3;
        }

        /* Paragraf */
        p {
            font-size: 16px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Aplikasi Manajemen User</h1>
        <nav>
            <ul>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li>Halo, <?php echo htmlspecialchars($_SESSION['nama_lengkap']); ?>!</li>
                    <li><a href="users/index.php">Manajemen User (CRUD)</a></li>
                    <li><a href="auth/logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="auth/login.php">Login</a></li>
                    <li><a href="auth/register.php">Registrasi</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <p>Ini adalah halaman utama. Silakan login atau registrasi untuk melanjutkan.</p>
    </div>
</body>
</html>
