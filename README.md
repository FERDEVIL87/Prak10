# Praktikum 10
Ferdy / 23.11.5484

Cara Running :
1. Buka Xampp dan start Apache ro Mysql e
2. gawe database (nggonku jenenge Prak9)
3. masukkan query ini :
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    nama_lengkap VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    role ENUM('admin', 'user') DEFAULT 'user', -- Opsional: untuk peran pengguna
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

4. gawe o folder nang folder htdocs nang jero folder xampp mu (contho naku nang kene E:\XAMPP\htdocs) jenengi sak sak e
5. open folder yang baru dibikin itu tadi di vscode
6. clone url github ini
7. bar kui buka web dan ketik localhost/namafolderyangdibuattadi/index.php
8. dah kelar, sisanya pelajari sendiri

# PR
Lenkapi menu button yang belum bisa dibuka supaya bisa dibuka/digunakan
