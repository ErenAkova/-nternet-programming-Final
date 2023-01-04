<?php
/*
$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="258147Bsyx.";
$vt_adi="teknolojisitesi";

$baglan =mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);
------BÖYLE DE YAPILABİLİR AŞAĞIDAKİ GİBİ DE-------
*/
$baglan =mysqli_connect("localhost","root","258147Bsyx.","teknolojisitesi");
if(!$baglan)
{
    die("Veritabanı bağlantı işlemi başarısız".mysqli_connect_error());
}
?>


