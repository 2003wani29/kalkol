<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Kalori</title>
    <link rel="stylesheet" href="profil.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="image/home-icon.png" alt="home">
            <h1><img src="image/kalkol.png" alt="kalkol"></h1>
        </div>
        <nav>
            <ul>
                <li><a href="entriprofil.html">Data</a></li>
                <li><a href="catatan_kalkol.html">Giziku</a></li> 
                <li><a href="artikel.html">Artikel</a></li>
                <li><a href="evaluasi.html">Evaluasi</a></li>
                <li><a href="logout.html">Logout</a></li>
            </ul>
        </nav>
    </header>
    
    <h2 class="profile-title">Entri Profil</h2> 
    
    <section class="profile-container">
        <section class="profile-entry-container">
            <form id="profileForm" method="POST" action="submit_profile.php">
                <table>
                    <tr>
                        <td><label for="name">Nama:</label></td>
                        <td><input type="text" id="name" name="name" required></td>
                    </tr>
                    <tr>
                        <td><label for="age">Usia:</label></td>
                        <td><input type="number" id="age" name="age" required></td>
                    </tr>
                    <tr>
                        <td><label for="gender">Jenis Kelamin:</label></td>
                        <td class="radio-group">
                            <input type="radio" id="male" name="gender" value="male" required>
                            <label for="male">Laki-laki</label>
                            <input type="radio" id="female" name="gender" value="female" required>
                            <label for="female">Perempuan</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="weight">Berat Badan (kg):</label></td>
                        <td><input type="number" id="weight" name="weight" required></td>
                    </tr>
                    <tr>
                        <td><label for="height">Tinggi Badan (cm):</label></td>
                        <td><input type="number" id="height" name="height" required></td>
                    </tr>
                    <tr>
                        <td><label for="activity">Aktivitas Harian:</label></td>
                        <td class="radio-group">
                            <input type="radio" id="ringan" name="activity" value="ringan" required>
                            <label for="ringan">Ringan</label>
                            <input type="radio" id="sedang" name="activity" value="sedang" required>
                            <label for="sedang">Sedang</label>
                            <input type="radio" id="aktif" name="activity" value="aktif" required>
                            <label for="aktif">Aktif</label>
                        </td>
                    </tr>
                </table>
                <div class="button-container">
                    <button type="submit" class="send-button">Kirim</button>
                </div>
            </form>
        </section>
    </section>

    <section class="result-container" id="resultContainer">
        <h2 class="profile-title">Hasil Perhitungan Kebutuhan Kalori Harian Anda</h2>
        <div class="result-content">
            <p id="result"></p>
        </div>
    </section>

</body>
</html>
