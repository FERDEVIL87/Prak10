<?php
require_once 'auth_check.php';
require_once '../config/database.php';

$user_id_to_delete = $_GET['id'] ?? null;

// Validasi ID user
if (!$user_id_to_delete || !filter_var($user_id_to_delete, FILTER_VALIDATE_INT)) {
    $_SESSION['message'] = "ID User tidak valid untuk dihapus.";
    $_SESSION['message_type'] = "error";
    header("Location: index.php");
    exit();
}

// Cegah user menghapus dirinya sendiri
if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $user_id_to_delete) {
    $_SESSION['message'] = "Anda tidak dapat menghapus akun Anda sendiri.";
    $_SESSION['message_type'] = "warning";
    header("Location: index.php");
    exit();
}

try {
    $stmt = $conn->prepare("DELETE FROM users WHERE id = :id");
    $stmt->bindParam(':id', $user_id_to_delete, PDO::PARAM_INT);

    if ($stmt->execute()) {
        $_SESSION['message'] = ($stmt->rowCount() > 0) 
            ? "User berhasil dihapus!" 
            : "User tidak ditemukan atau sudah dihapus.";
        $_SESSION['message_type'] = ($stmt->rowCount() > 0) ? "success" : "warning";
    } else {
        $_SESSION['message'] = "Gagal menghapus user.";
        $_SESSION['message_type'] = "error";
    }
} catch (PDOException $e) {
    $_SESSION['message'] = "Error database: " . $e->getMessage();
    $_SESSION['message_type'] = "error";
}

header("Location: index.php");
exit();
?>
