<!DOCTYPE html>
<html>
<head>
	<title>Kasiyer</title>
</head>
<body>
<center>
	<h1>Kasiyerler</h1>
	<form method="POST">
<input type="text" name="veri">
<input type="submit" name="Gonder" value="Ekle">
</form>

<h1>Kasiyer Sil</h1>
	<form method="POST">
<input type="text" name="silveri" value="Silinecek Kasiyerin Adını Girin">
<input type="submit" name="Gonder" value="Sil">
	</form>
	<br><br><br>
	<?php
	error_reporting(0); 
$servername = "localhost";
$username = "root";
$password = "";
$database = "kasiyerler";

$conn = mysqli_connect($servername, $username, $password, $database);
	if($conn) {
		echo "<br><br>Bağlantı Var<br>";
	} elseif(!$conn) {
		echo "<br><br>Bağlantı Yok<br>";
	}
	 $silveri = $_POST['silveri'];
        $silsql = "DELETE FROM kasiyer WHERE kasiyeradi = ('$silveri');";
        $sil = mysqli_query($conn, $silsql);
        if($silveri == "") {
        	echo "";
        } elseif($sil) {
        	echo "Kasiyer Başarıyla Silindi";
        } elseif(!$sil) {
        	echo "Kasiyer Silinemedi";
        }
	$veri = $_POST['veri'];
	$sql = "INSERT INTO kasiyerler.kasiyer VALUES ('$veri');";
	
    $ekle = mysqli_query($conn, $sql);
    
    if($veri == "") {
    	echo "";
    } elseif($ekle) {
    	echo "<br>Kasiyer Eklendi";
    } elseif(!$ekle) {
    	echo "<br>Kasiyer Eklenemedi";
    } 

    echo "<br><hr>";
    echo "<br>";
    $sorgu = $conn->query("SELECT * FROM `kasiyer`");
    while($cikti = $sorgu->fetch_assoc()) {
    	echo "<br>".$cikti['kasiyeradi']."<br>";
    }
    #$cikti = $sorgu->fetch_assoc();
    #echo $cikti['kasiyeradi'];

   ?>


</center>
</body>
</html>
