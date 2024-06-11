<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anasayfa | Umut Işığı</title>

  <link rel="stylesheet" href="css/style.css">

  <script src="https://kit.fontawesome.com/4668eceb1c.js" 
  crossorigin="anonymous"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
</head>

<head>
  <body>
      <section id="menu">
          <div id="logo2">Umut Işığı</div>
          <nav>
              <a href="index.php">Anasayfa</a>
              <a href="#hakkimizda">Hakkımızda</a>
              <a href="psikologlarimiz.php">Psikologlarımız</a>
              <a href="kategoriler.php">Kategoriler</a>
              <a href="merak-edilenler.php">Merak Edilenler</a>
              <a href="iletisim.php">İletişim</a>
              <a href="kayıt.php">Kayıt ol</a>
              <a href="giriş.php">giriş yap</a>
          </nav>
      </section>
  </body>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Psikologlarımız</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background: #ffffff;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    header {
      width: 100%;
      padding: 20px;
      background-color: rgb(119, 10, 65);
      color: white;
      text-align: center;
    }
    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin: 20px 0;
      padding: 0 10px;
    }
    .card {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      margin: 15px;
      padding: 20px;
      width: 300px;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
    }
    .card img {
      border-radius: 50%;
      width: 120px;
      height: 120px;
      object-fit: cover;
      border: 5px solid rgb(119, 10, 65);
      transition: transform 0.3s;
    }
    .card:hover img {
      transform: scale(1.1);
    }
    .card h3 {
      color: rgb(119, 10, 65);
      margin: 15px 0 10px 0;
    }
    .card p {
      color: #555;
    }
    .card a {
      display: inline-block;
      margin-top: 15px;
      padding: 10px 20px;
      background-color: rgb(119, 10, 65);
      color: white;
      text-decoration: none;
      border-radius: 25px;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }
    .card a:hover {
      background-color: #87083e;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <header>
    
  <h1>Psikologlarımız</h1>
  </header>
  <div class="container">
    <div class="card">
      <img src="psikolog4.jpg" alt="Psikolog 4">
      <h3>Dr. İrem Nur YILDIZ</h3>
      <p>Psikiyatri Uzmanı</p>
      <p>Dr. İrem Nur YILDIZ, Sakarya Üniversitesi Tıp Fakültesi'nden mezun olmuş ve 12 yıldır 
        psikiyatri uzmanı olarak çalışmaktadır. Uzmanlık alanı bipolar bozukluk ve şizofreni tedavisidir.</p>
      <a href="randevu.php">Randevu Al</a>
    </div>
    <div class="card">
      <img src="psikolog1.jpg" alt="Psikolog 1">
      <h3>Dr. Sude Nur GÜMÜŞ</h3>
      <p>Uzman Psikolog</p>
      <p>Dr. Sude Nur GÜMÜŞ, Karabük Üniversitesi Psikoloji Bölümü'nden mezun olmuş ve 
        10 yıldır uzman psikolog olarak hizmet vermektedir. Uzmanlık alanı bireysel terapi ve anksiyete bozukluklarıdır.</p>
      <a href="randevu.php">Randevu Al</a>
    </div>
    <div class="card">
      <img src="iso.jpg" alt="Psikolog 2">
      <h3>Prof. Dr. İsmail AKBAŞ</h3>
      <p>İlişki Terapisti</p>
      <p>Dr. İsmail AKBAŞ, Eskişehir Üniversitesi Psikoloji Bölümü'nden mezun 
        olmuş ve 6 yıldır ilişki terapisti olarak çalışmaktadır. Uzmanlık alanı depresyon ve travma tedavisidir.</p>
      <a href="randevu.php">Randevu Al</a>
    </div>
    <div class="card">
      <img src="psikolog3.jpg" alt="Psikolog 3">
      <h3>Dr. Selin GÜLÇİÇEK</h3>
      <p>Çocuk Psikoloğu</p>
      <p>Dr. Selin GÜLÇİÇEK, Soma Üniversitesi Psikoloji Bölümü'nden mezun 
        olup 6 yıldır çocuk psikoloğu olarak görev yapmaktadır. Uzmanlık alanı çocuk ve ergen terapileridir.</p>
      <a href="randevu.php">Randevu Al</a>
    </div>
    <div class="card">
      <img src="psikolog5.jpg" alt="Psikolog 5">
      <h3>Dr. Avni FERAH</h3>
      <p>Evli Çift Terapisti</p>
      <p>Dr. Avni FERAH, Boğaziçi Üniversitesi Psikoloji Bölümü'nden mezun olup 
        9 yıldır evli çift terapisti olarak hizmet vermektedir. Uzmanlık alanı ilişki sorunları ve aile terapileridir.</p>
      <a href="randevu.php">Randevu Al</a>
    </div>
    
<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
    integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

</body>
</html>

