<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa | Umut Işığı</title>

    <link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/4668eceb1c.js" 
    crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
          $(".dropbtn").click(function(){
            $(".dropdown-content").toggle();
          });
        });
      </script>
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
</head>


<body>
     <section id="menu">
        <div id="logo">Umut Işığı</div>
        <nav>
            <a href="index.php">Anasayfa</a>
            <a href="#hakkimizda">Hakkımızda</a>
            <a href="psikologlarimiz.php">Psikologlarımız</a>
            <div class="dropdown">
                <button class="dropbtn">Merak Edilenler
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <li><a href="#dernekici"> Sık Sorulan Sorular </a></li>
                    <li><a href="#dernekici"> Tarihçemiz </a></li>
                </div>
            </div>
            <a href="iletisim.php">İletişim</a>
            <a href="giris.php">Giriş yap</a>
        </nav>
    </section>

    <section id="anasayfa">
        <div id="black"></div>
        <div id="icerik"> 
            <h1>Umut Işığı</h1>
            <hr width=300 align="center">
            <p>Umut Işığını Yak, Yoluna Devam Et!</p>
        </div>

        <section id="hakkimizda">
            <h3>Hakkımızda</h3>
            <div class="container">
                <div id="left">
                    <img src="img/012.jpeg" alt="" id="left-image">
                </div>
                <div id="right">
                    <div id="box1">
                        <h4>Misyonumuz</h4>
                        <p>Terapiyi herkes için 7/24 ulaşılabilir kılmak,
                            kişinin ihtiyacına uygun terapi hizmeti sunmak,
                            katma değerli sistemle kullanıcı odaklı bir yapı 
                            oluşturmak, pozitif psikoloji ve mental iyi oluşu 
                            sürdürülebilirlik çerçevesinde yaygınlaştırmak.</p>
                    </div>
                    <div id="box2">
                        <h4>Vizyonumuz</h4>
                        <p>Terapiye karşı önyargıları kırıp global ölçekte terapi
                        hizmeti sunmak, yenilikçi bir anlayışla terapiyi teknolojiyle
                        bütünleştirirken geleneksel terapiye ulaşma imkanı olmayanlar
                         için güçlü bir alternatif sunmak ve bireysel ruh sağlığına 
                         verilen önemi geliştirmek.</p>
                    </div>
                </div>
            </div>
        </section>
    </section>

    

</body>
</html>
