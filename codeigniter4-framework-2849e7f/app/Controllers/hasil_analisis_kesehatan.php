<?php
// Contoh data yang diterima, misalnya dari database atau hasil perhitungan
$kondisiTubuh = "ideal"; // Nilainya bisa "ideal", "kurus", atau "obesitas"
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Analisis Kesehatan</title>
</head>
<body>
  <header>
    <div>
      <h1>Kalkulator Kalori</h1>
      <nav>
        <a href="data.php">Data</a> |
        <a href="giziku.php">Giziku</a> |
        <a href="artikel.php">Artikel</a> |
        <a href="evaluasi.php">Evaluasi</a> |
        <a href="logout.php">Logout</a>
      </nav>
    </div>
  </header>
  <main>
    <h2>HASIL ANALISIS KESEHATAN</h2>
    <p><strong>Kondisi Tubuh:</strong></p>
    <p>
      <input type="radio" name="kondisi" value="ideal" id="ideal" <?php echo $kondisiTubuh === 'ideal' ? 'checked' : ''; ?>>
      <label for="ideal">Ideal</label>

      <input type="radio" name="kondisi" value="kurus" id="kurus" <?php echo $kondisiTubuh === 'kurus' ? 'checked' : ''; ?>>
      <label for="kurus">Kurus</label>

      <input type="radio" name="kondisi" value="obesitas" id="obesitas" <?php echo $kondisiTubuh === 'obesitas' ? 'checked' : ''; ?>>
      <label for="obesitas">Obesitas</label>
    </p>

    <p><strong>Kalori yang Dibutuhkan:</strong></p>
    <p><strong>Kalori yang Harus Dibakar:</strong></p>

    <div>
      <label for="dibutuhkan">Dibutuhkan:</label>
      <progress id="dibutuhkan" value="60" max="100"></progress>
      <span>60%</span>
    </div>
    <div>
      <label for="dibakar">Dibakar:</label>
      <progress id="dibakar" value="40" max="100"></progress>
      <span>40%</span>
    </div>
  </main>
</body>
</html>