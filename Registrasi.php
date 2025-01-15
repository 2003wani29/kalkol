<?php
$host = 'localhost';  // atau sesuai dengan konfigurasi server
$username = 'root';   // username database
$password = '';       // password database
$database = 'registrasi';  // nama database

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form registrasi
    $userUsername = $_POST['username'];
    $userPassword = $_POST['password'];
    $userConfirmPassword = $_POST['confirmPassword'];

    // Validasi password
    if ($userPassword === $userConfirmPassword) {
        // Enkripsi password
        $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);

        // Menyimpan data pengguna ke dalam database
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $userUsername, $hashedPassword);

        if ($stmt->execute()) {
            echo "Registrasi berhasil!";
            // Redirect atau tampilkan pesan sukses
            header("Location: index.html");  // Redirect ke halaman login setelah berhasil
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Password tidak cocok. Silakan coba lagi.";
    }

    $stmt->close();
}

$conn->close();
?>
