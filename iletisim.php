<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>İletişim</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      color: #333;
    }
    .container {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 400px;
    }
    .container h1 {
      color:  rgb(119, 10, 65); /* Başlık rengi*/
      margin-bottom: 20px;
    }
    .form-group {
      margin-bottom: 15px;
      text-align: left;
    }
    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    input[type="text"], input[type="email"], textarea {
      width: calc(100% - 20px);
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background: #f9f9f9;
      color: #333;
    }
    input[type="submit"] {
      background-color: rgb(119, 10, 65); /* Buton rengi */
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    input[type="submit"]:hover {
      background-color:  rgb(119, 10, 65);
    }
    ::placeholder {
      color: #999;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Bizimle iletişime geçmek için:</h1>
    <form>
      <div class="form-group">
        <label for="email">Mail Adresiniz:</label>
        <input type="email" id="email" name="email" placeholder="Geçerli bir email adresi giriniz" required>
      </div>
      <div class="form-group">
        <label for="name">Adınız ve Soyadınız:</label>
        <input type="text" id="name" name="name" placeholder="Adınızı giriniz" required>
      </div>
      <div class="form-group">
        <label for="message">Mesajınız:</label>
        <textarea id="message" name="message" rows="4" placeholder="Mesajınızı yazınız" required></textarea>
      </div>
      <input type="submit" value="GÖNDER">
    </form>
  </div>
</body>
</html>


