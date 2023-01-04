<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
   
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<link rel="stylesheet" href="css/reset.css" /> 
	<link rel="stylesheet" href="css/style.css" /> 
	 
	<title>Sepet</title> 
<style>
#sepetayari{
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #04AA6D;
color: white;
}
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
<h1>Sepet Listesi</h1> 
	<table id="customers"> 
	    <tr> 
	        <th>İsim</th> 
	        <th>Fiyat</th> 
	        <th>Satın Al</th> 
            <th>Sepetten Çıkar</th>
			<th>Sepete Ekle</th>
	    </tr> 
	    
			<td><a href="sepet.php">Turbox Ekle</a></td>
	    </tr> 
	     <tr id="zeiron"> 
	        <td>Zeiron Fx50 Masaüstü Oyuncu Bilgisayarı</td> 
	        <td>7.919,73 TL</td> 
	        <td><a href="odemezeiron.php">Kart İle Ödeme</a></td> 
            <td id="silmek"><a href="sil7.php">Sil</a></td>
	    </tr> 
        
            <td><a href="sepet.php">Yazici Ekle</a></td>
	    </tr> 
        
            <td id="silmek"><a href="sepet.php">Telefon Ekle</a></td>
	    </tr> 
	</table>
    <br><br><br>
    <br>
    <br>
<button><a href="sepet.php"> HEPSİNİ EKLE</a></button>

 
</body> 
</html>