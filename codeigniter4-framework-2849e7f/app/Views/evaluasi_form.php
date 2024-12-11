<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/eval.css'); ?>">
    <title>Kalkulator Kalori</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="<?php echo base_url('assets/image/home-icon.png'); ?>" alt="home">
            <h1><img src="<?php echo base_url('assets/image/kalkol.png'); ?>" alt="kalkol"></h1>
        </div>
        <nav>
            <ul>
                <li><a href="coba.html">Data</a></li>
                <li><a href="#">Giziku</a></li> 
                <li><a href="artikel.html">Artikel</a></li>
                <li><a href="evaluasi.html">Evaluasi</a></li>
                <li><a href="logout.html">Logout</a></li>
            </ul>
        </nav>
    </header>
    <h2 class="evaluation-title">Evaluasi</h2>

    <div class="evaluation">
        <?php echo form_open('evaluation/submit'); ?>
            <input type="text" name="nama" placeholder="Nama" required />
            <input type="email" name="email" placeholder="Email" required />
            <textarea name="saran" placeholder="Kritik & Saran" required></textarea>
            <div class="submit-container">
                <input type="submit" value="Kirim" />
            </div>
        <?php echo form_close(); ?>
    </div>
</div> 
</body>
</html>
