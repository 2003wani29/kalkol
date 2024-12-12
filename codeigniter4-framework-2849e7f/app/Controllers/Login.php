<?php
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6e6;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fffaf0;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        .container img {
            width: 50px;
            margin-bottom: 10px;
        }
        .container h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }
        .input-field {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        .forgot-password {
            font-size: 14px;
            color: #007bff;
            text-decoration: none;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }
        .button {
            display: block;
            width: 100%;
            background-color: #ff6b6b;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }
        .button:hover {
            background-color: #e63946;
        }
        .register {
            font-size: 14px;
            margin-top: 15px;
        }
        .register a {
            color: #007bff;
            text-decoration: none;
        }
        .register a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://via.placeholder.com/50/ff6b6b/ffffff?text=❤️" alt="Logo">
        <h1>Login</h1>
        <form action="#">
            <input type="email" class="input-field" placeholder="Masukkan email" required>
            <input type="password" class="input-field" placeholder="Masukkan password" required>
            <a href="#" class="forgot-password">Lupa password?</a>
            <button type="submit" class="button">Login</button>
        </form>
        <p class="register">
            Belum punya akun? <a href="#">Daftar</a>
        </p>
    </div>
</body>
?>
