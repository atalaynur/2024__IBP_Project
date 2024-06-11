<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 2em;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            text-align: center;
        }
        input[type="email"] {
            width: 100%;
            padding: 0.75em;
            margin: 1em 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="password"] {
            width: 100%;
            border-radius: 4px;
        }
        button, .social-button {
            width: 100%;
            padding: 0.75em;
            margin: 0.5em 0;
            border: none;
            border-radius: 4px;
            font-size: 1em;
            cursor: pointer;
        }
        button {
            background-color: rgb(119, 10, 65);
            color: white;
        }
        .social-button {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f5f5f5;
            color: #333;
        }
        .social-button img {
            margin-right: 10px;
        }
        .link {
            color: rgb(119, 10, 65);
            text-decoration: none;
        }
        .link:hover {
            text-decoration: underline;
        }
        .divider {
            margin: 1em 0;
            display: flex;
            align-items: center;
        }
        .divider::before, .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background-color: #ccc;
        }
        .divider::before {
            margin-right: 10px;
        }
        .divider::after {
            margin-left: 10px;
        }
    </style>
</head>
<body>
<div class="container">
        <h2>Kaydol</h2>
        <form action="giris.php" method="POST">
            <input type="email" name="email" placeholder="E-posta" required>
            <input type="password" name="password" placeholder="Şifre" required>
            <button type="submit">
            <a href="index.php" class="link"> Giriş</button>
        </form>
        <div class="divider">YA DA</div>
        <p>Zaten bir hesabınız yok mu? <a class="link" href="kaydol.php">Kayıt ol</a></p>
        <button class="social-button">
            <a href="yönetici.php" class="link">Admin Sayfasından Devam Et</a>
        </button>
    </div>
    </div>
</body>
</html>