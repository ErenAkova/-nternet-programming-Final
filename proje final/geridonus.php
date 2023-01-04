<?php
include("baglanti.php");
if(isset($_POST["isim"], $_POST["tel"], $_POST["E-mail"], $_POST["konu"], $_POST["mesaj"]))
{
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["dusuncesi"];
    $email=$_POST["tarih"];
    $ekle="INSERT INTO mesajlar (adsoyad  , dusuncesi, tarih) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";
  
if($baglan->query($ekle)===TRUE)
{
    echo "<script>alert('Mesajınız Başarı ile Gönderilmiştir')</script>";/* Buraya direkt mesaj gönderilmiş deseydim en aşağıda yazardı*/

}
else{
    echo "<script>alert('Mesajınız Gönderilirken Bir Hata Oluştu')</script>";
}
}

?>
