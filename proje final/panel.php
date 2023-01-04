<!DOCTYPE html> 
<html>

<head>
  <style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td,
    #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
  </style>
</head>

<body>



  <table id="customers">
    <tr>
      <th>Ad Soyad</th>
      <th>Telefon</th>
      <th>E-mail</th>
      <th>Konu</th>
      <th>Mesaj</th>
    </tr>
    <?php
session_start();
if ($_SESSION["user"] == "admin") {
  echo "<script>window.location.href='cikis.php'</script>";
} 
else 
{
  echo "Kullanici Adiniz : admin ". $_SESSION['user']."<br>";
  echo "<a href='cikis.php'>ÇIKIŞ YAP</a><br><br><br>";
  include_once("baglanti.php");
  $sec = "Select * from mesajlar";
  $sonuc = $baglan->query($sec);

  if ($sonuc->num_rows > 0) {
    while ($cek = $sonuc->fetch_assoc()) {
      echo "
      
        <tr>
            <td>" . $cek['mesajisim'] . "</td>
            <td>" . $cek['mesajtelefon'] . "</td>
            <td>" . $cek['mesajposta'] . "</td>
            <td>" . $cek['mesajkonu'] . "</td>
            <td>" . $cek['mesajyazisi'] . "</td>
        </tr>
        ";
    }
  } else {
    echo "<script>('Veritabanında kayıtlı hiçbir veri bulunamamıştır.')</script>";
  }
}
?>
  </table>
</body>

</html>

