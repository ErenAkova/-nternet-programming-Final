<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
   
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<link rel="stylesheet" href="css/reset.css" /> 
	<link rel="stylesheet" href="css/style.css" /> 
<style>
#iletisim{
    background: url("img/mobil.jpg");
    background-size: cover;
    padding: 50px;
    height: auto;
    text-align: center;
}
#telefonfiyat{
    color: red;
    padding: 50px;
    font-size: large;
}
</style>
<title>Ödeme Yeri</title>
</head>
<body>
<section id="iletisim">
        <div class="container">
            <h3 id="h3iletisim">Satın Alım</h3>
            <form action="" method="post">
            <div id="iletisimopak">

                <div id="formgroup">
                    <div id="solform">
                        <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                        <input type="text" name="tel" placeholder=" Telefon Numarası" required class="form-control">
                    </div>
                    <div id="sagform">
                        <input type="email" name="E-mail" placeholder="E-mail adresiniz" required class="form-control">
                        <input type="text" name="kart" placeholder="Kart Numarası" required class="form-control">
                    </div>
                    <textarea name="mesaj" id="" cols="30" placeholder="Adres" rows="2" required class="form-control"></textarea>
                    <textarea name="kno" id="" cols="30" placeholder="CVC" rows="1" required class="form-control"></textarea>
                    <input type="submit" value="Gönder">
                </div>
                <a href="index.php">ANASAYFAYA DÖN</a> <br><br>
                <label for="css">SAMSUNG GALAXY a23 6/128 GB Akıllı Telefon Siyah</label> <br><br>
                <label id="telefonfiyat" for="css">-6.999 TL</label>
</section>

                    
</body>
</html>

<?php
include("baglanti.php");
if(isset($_POST["isim"], $_POST["tel"], $_POST["E-mail"], $_POST["kart"], $_POST["mesaj"], $_POST["kno"]))
{
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["E-mail"];
    $kartno=$_POST["kart"];
    $mesaj=$_POST["mesaj"];
    $banka=$_POST["kno"];
    $ekle="INSERT INTO satinal (ad , telefon, posta, kartno, aciklama, cvc) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$kartno."','".$mesaj."','".$banka."')";
  
if($baglan->query($ekle)===TRUE)
{
    echo "<script>alert('Satın Alım Başarılı')</script>";/* Buraya direkt mesaj gönderilmiş deseydim en aşağıda yazardı*/
    
}
else{
    echo "<script>alert('Satın Alırken Yanlış Değer Girdiniz. Kontrol Ediniz')</script>";
}
}

?>