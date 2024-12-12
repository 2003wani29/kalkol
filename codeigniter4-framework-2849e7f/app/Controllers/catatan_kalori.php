<?php
$totalMakanan = 0;
$totalTerbakar = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $namaMakanan = htmlspecialchars($_POST['nama_makanan']);
    $kalori = intval($_POST['kalori']);
    $jenisAktivitas = $_POST['jenis_aktivitas'];
    $durasi = intval($_POST['durasi']);

    $aktivitasKalori = [
        'lari' => 500,
        'bersepeda' => 400,
        'jalan' => 300
    ];

    $kaloriTerbakar = $aktivitasKalori[$jenisAktivitas] * $durasi;

    $totalMakanan += $kalori;
    $totalTerbakar += $kaloriTerbakar;

    $kaloriBersih = $totalMakanan - $totalTerbakar;
} else {
    $kaloriBersih = 0;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Kalori</title>
</head>
<body>
<div>
    <header>
        <h1>Catatan Kalori</h1>
        <nav>
            <a href="data.php">Data</a> |
            <a href="giziku.php">Giziku</a> |
            <a href="artikel.php">Artikel</a> |
            <a href="evaluasi.php">Evaluasi</a> |
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <main>
        <h2>Catatan Kalori Harian</h2>
        <form method="POST" action="">
            <div>
                <label for="nama-makanan">Nama Makanan:</label>
                <input type="text" id="nama-makanan" name="nama_makanan" placeholder="Masukkan nama makanan" required>
            </div>
            <div>
                <label for="kalori">Kalori (kcal):</label>
                <input type="number" id="kalori" name="kalori" placeholder="Masukkan jumlah kalori" required>
            </div>
            <div>
                <label for="jenis-aktivitas">Jenis Aktivitas:</label>
                <select id="jenis-aktivitas" name="jenis_aktivitas" required>
                    <option value="">Pilih aktivitas</option>
                    <option value="lari">Lari (500 kcal/jam)</option>
                    <option value="bersepeda">Bersepeda (400 kcal/jam)</option>
                    <option value="jalan">Jalan Kaki (300 kcal/jam)</option>
                </select>
            </div>
            <div>
                <label for="durasi">Durasi (jam):</label>
                <input type="number" id="durasi" name="durasi" placeholder="Masukkan durasi aktivitas" required>
            </div>
            <button type="submit">Tambah Data</button>
        </form>
        <div>
            <p>Total kalori makanan: <span id="total-makanan"><?php echo $totalMakanan; ?></span> kcal</p>
            <p>Total kalori terbakar: <span id="total-terbakar"><?php echo $totalTerbakar; ?></span> kcal</p>
            <p>Kalori bersih: <span id="kalori-bersih"><?php echo $kaloriBersih; ?></span> kcal</p>
        </div>
    </main>
</div>
</body>
</html>