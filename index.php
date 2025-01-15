<?php
// Informasi koneksi database
$host = 'localhost';
$username = 'root';  
$password = '';      
$database = 'registrasi'; 

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form login
    $userUsername = $_POST['username'];
    $userPassword = $_POST['password'];

    // Query untuk mencari user berdasarkan username
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $userUsername);
    $stmt->execute();
    $result = $stmt->get_result();

    // Cek apakah username ditemukan
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verifikasi password
        if (password_verify($userPassword, $user['password'])) {
            // Sukses login, buat session
            session_start();
            $_SESSION['username'] = $user['username'];
            $_SESSION['userId'] = $user['id'];

            // Redirect ke halaman utama setelah login berhasil
            header("Location: home.php");
            exit();
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
    }

    $stmt->close();
}

$conn->close();
?>
