<?php
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe7ea;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff8f3;
            padding: 20px 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 320px;
        }
        .container img {
            width: 50px;
            margin-bottom: 10px;
        }
        .container h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .container input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        .container button {
            background-color: #f07d7d;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }
        .container button:hover {
            background-color: #e06969;
        }
        .container a {
            color: #0056b3;
            text-decoration: none;
            font-size: 14px;
        }
        .container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://via.placeholder.com/50x50.png?text=❤️" alt="Icon">
        <h2>Registrasi</h2>
        <form>
            <input type="email" placeholder="Masukkan email" required>
            <input type="password" placeholder="Masukkan password" required>
            <input type="password" placeholder="Masukkan ulang password" required>
            <button type="submit">Daftar</button>
        </form>
        <p>Sudah punya akun? <a href="#">Login</a></p>
    </div>
</body>
?>
