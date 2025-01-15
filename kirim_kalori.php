<?php
// Informasi koneksi ke database
$host = 'localhost';
$username = 'root';  // Ganti dengan username MySQL Anda
$password = '';      // Ganti dengan password MySQL Anda
$database = 'kalkulator_kalori'; // Nama database

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Mengecek apakah ada error pada koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengecek apakah data dikirim dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $foodName = $_POST['foodName'];
    $calories = $_POST['calories'];
    $activity = $_POST['activity'];
    $duration = $_POST['duration'];

    // Menyimpan data ke dalam tabel catatan_kalori
    $stmt = $conn->prepare("INSERT INTO catatan_kalori (food_name, calories, activity, duration) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sisi", $foodName, $calories, $activity, $duration);

    if ($stmt->execute()) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Menutup statement dan koneksi
    $stmt->close();
    $conn->close();
}
?>
