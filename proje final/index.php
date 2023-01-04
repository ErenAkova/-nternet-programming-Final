<!DOCTYPE html>
<html lang="tr">
<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@1,600&display=swap" rel="stylesheet">
    <style>
        
    </style>
    <meta charset="UTF-8">
    <title>AnaSayfa</title>
    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></scriptsrc>></script>
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">
</head>
<body>
    <section id="menu">
        <div id="logo">Akova TEKNO</div>
        <nav>
            <a href="#anasayfa"></i>Anasayfa</a>
            <a href="#hakkimizda"></i>Hakkımızda</a>
            <a href="#kategori"></i>Kategoriler</a>        
            <a href="#ekip"></i>Ekip</a>
            <a href="#iletisim"></i>İletişim</a>
        </nav>
    </section>


    <section id="anasayfa">
        <div id="black">

        </div>
        <div id="icerik">
            <h2>Akova TEKNO</h2>
            <hr width="300" align="left">
            <p>Bu sitede masaüstü bilgisayar, laptop, telefon ve 3d yazıcı bulunmaktadır</p>
        </div>

    </section>
    <section id="hakkimizda">
        <h3>Hakkımızda</h3>
        <div class="container">
            <div id="sol">
                <h5 id="h5sol">
                Eren Akova tarafından 2022 yılında kurulmuştur. Ardından yardımcı ekipte olan 3 arkadaşımız Hakan Çelik, Elif Maral, Merve Tuker çalışanlarımız ile birlikte zamanla iş alımları artmıştır
                </h5>
            </div>
            <div id="sag">
                <span>A</span>
                <p>kovaTekno bağımsız bir şirkettir</p>
            </div>
            <img src="img/about.jpg" alt="" class="img-fluid mt100">
            <p id="pson">AkovaTekno'ya hoşgeldiniz</p>
        </div>
    </section>
    <section id="kategori">
        <div class="container">
            <h3>Kategoriler</h3>
            <div class="owl-carousel owl-theme">

                <div class="kat item" data-merge="1.5">
                <a href="masaüstüpc.php">    
                <img src="img/a.webp" alt="" class="img-fluid">
                    <h5 class="baslikkat">Masaüstü Bilgisayar</h5>
                    <p class="katp"></p></a>
                </div>

                <div class="kat item" data-merge="1.5">
                <a href="dizüstüpc.php">    
                <img src="img/Razer-Lambda-hero-052022-1.jpg" alt="" class="img-fluid">
                    <h5 class="baslikkat">Dizüstü Bilgisayar</h5>
                    <p class="katp"></p></a>
                </div>               

                <div class="kat item" data-merge="1.5">
                <a href="telefon.php">    
                <img src="img/mobil-fotografcilik-sertifika-programi.jpg" alt="" class="img-fluid">
                    <h5 class="baslikkat">Telefonlar</h5>
                    <p class="katp"></p></a>
                </div>

                <div class="kat item" data-merge="1.5">
                <a href="3dyazıcı.php">
                    <img src="img/3d-yazıcılar.webp" alt="" class="img-fluid">
                    <h5 class="baslikkat">3D Yazıcılar</h5>
                    <p class="katp"></p></a>
                </div>

            </div>
        </div>
    </section>

    <section id="ekip">
        <div class="container">
            <h3 id="ekiph3">Ekip</h3>
            <div class="sutun-sol-sag">
                <img src="img/ekip1.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Hakan Çelik</h4>
                <p class="ekipp">Görevi: Site Yönetimi</p>
                <div class="ekip-ikon">
                    
                </div>
            </div>
            <div class="sutun-sol-sag">
                <img src="img/ekip2.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Elif Maral</h4>
                <p class="ekipp">Görevi: Ürünleri Paketleme</p>
                <div class="ekip-ikon">
                    
                </div>
            </div>
            <div class="sutun-sol-sag">
                <img src="img/ekip3.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Merve Tuker</h4>
                <p class="ekipp">Görevi: Müşteri Temsilcisi</p>
                <div class="ekip-ikon">
                    
                </div>
            </div>
        </div>
    </section>
    <section id="iletisim">
        <div class="container">
            <h3 id="h3iletisim">İletişim</h3>
            <form action="index.php" method="post">
            <div id="iletisimopak">

                <div id="formgroup">
                    <div id="solform">
                        <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                        <input type="text" name="tel" placeholder=" Telefon Numarası" required class="form-control">
                    </div>
                    <div id="sagform">
                        <input type="email" name="E-mail" placeholder="E-mail adresiniz" required class="form-control">
                        <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                    </div>
                    <textarea name="mesaj" id="" cols="30" placeholder="Mesaj Giriniz" rows="10" required class="form-control"></textarea>
                    <input type="submit" value="Gönder">
                </div>

            <div id="adres">
                <h4 id="adresbaslik">Adres : </h4>
                <p class="adresp"> DPÜ Evliya Çelebi Yerleşkesi
                    Kütahya Tavşanlı Yolu 10. km <br><br>
                    43100 Kütahya Merkez/Kütahya <br><br>
                    E-mail : erenakova16@gmail.com <br><br>
                    0222 222 22 22 <br><br> 
                </p>
            </div>
            </div>
            </form>
            <footer>
                <div id="copyright">2022 | Tüm Hakları Saklıdır</div>
                <div id="socialfooter">
                    <a href="https://www.instagram.com/eerenakova/"></i>İNSTAGRAM</a>
                </div>
                <a href="index.php"></i>En Yukarı</a>
            </footer>
        </div>
    </section>
<script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
<script src="owl/owl.carousel.min.js"></script>
<script src="owl/script.js"></script>
</body>
</html>
<?php
include("baglanti.php");
if(isset($_POST["isim"], $_POST["tel"], $_POST["E-mail"], $_POST["konu"], $_POST["mesaj"]))
{
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["E-mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];
    $ekle="INSERT INTO mesajlar (mesajisim  , mesajtelefon, mesajposta, mesajkonu, mesajyazisi) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";
  
if($baglan->query($ekle)===TRUE)
{
    echo "<script>alert('Mesajınız Başarı ile Gönderilmiştir')</script>";/* Buraya direkt mesaj gönderilmiş deseydim en aşağıda yazardı*/

}
else{
    echo "<script>alert('Mesajınız Gönderilirken Bir Hata Oluştu')</script>";
}
}

?>

