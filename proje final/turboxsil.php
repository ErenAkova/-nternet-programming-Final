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
            <td id="silmek"><a href="sil.php">Sil</a></td>
	    </tr> 
        <tr id="3dyazıcı"> 
	        <td>BenMaker Ekser 3D Printer</td> 
	        <td>28,190.00 TL</td> 
	        <td><a href="odeme3d.php">Kart İle Ödeme</a></td>
            <td id="silmek"><a href="sil3.php">Sil</a></td> 
	    </tr> 
        <tr id="telefon"> 
	        <td>SAMSUNG GALAXY a23 6/128 GB Akıllı Telefon Siyah</td> 
	        <td>6.999 TL</td> 
	        <td><a href="odemetelefon.php">Kart İle Ödeme</a></td> 
            <td id="silmek"><a href="sepet.php">Sil</a></td>
	    </tr> 
	</table>

 
</body> 
</html>
