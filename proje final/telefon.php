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
            <a href="index.php"></i>Anasayfa</a>
            <a href="#hakkimizda"></i>Hakkımızda</a>
            <a href="#kategori"></i>Kategoriler</a>        
            <a href="#ekip"></i>Ekip</a>
            <a href="#iletisim"></i>İletişim</a>
        </nav>
    </section>
    <section id="ekip">
        <div class="container">
            <h3 id="ekiph3">Telefon</h3>
            <div class="sutun-sol-sag">
                <img src="img/135498-1_large.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">SAMSUNG GALAXY a23 6/128 GB Akıllı Telefon Siyah</h4>
                <p class="ekipp">İşlemci: 680İşlemci Hızı:2,4 GHzİşlemci Hızı:2.4 GHz+1.8 GHz İşlemci Türü: Qualcomm Snapdragon İşlemci Türü: Qualcomm Snapdragon 680 İşlemci Sayısı:8{İşlemci Sayısı: 8 Çekirdek İşlemci Hızı Aralığı: 2.73+ GHz<br> 6.999 TL !!!!</p><button id="sep"><a href="sepet.php">Satın Al</button></a>
                
            </div>

            <form method="post" action="">
            Düşünceleriniz ve tavsiyeleriniz: <input type="text" id="Düşünceleriniz" name="geri">
  <input type="submit" value="Gönder">
            </form>
            <br><br>
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
                <a href="telefon.php"></i>En Yukarı</a>
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




    
   
<?php
include("baglanti.php");
if(isset($_POST["geri"]))
{
    $dusunce=$_POST["geri"];
    $ekle="INSERT INTO dusunceler (dusuncesi) VALUES ('".$dusunce."')";
  
if($baglan->query($ekle)===TRUE)
{
    echo "<script>alert('Geri Dönüşünüz İçin Teşekkürler')</script>";/* Buraya direkt mesaj gönderilmiş deseydim en aşağıda yazardı*/

}
else{
    echo "<script>alert('Mesajınız Gönderilirken Bir Hata Oluştu')</script>";
}
}

?>

