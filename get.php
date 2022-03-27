<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<?php
error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$database = "sqli";

$conn = mysqli_connect($servername, $username, $password, $sqli);

$id = $_GET['id'];

$komut = "SELECT * FROM sqli.yazi WHERE id = $id";

$sonuc = $conn->query($komut);

if ($sonuc->num_rows > 0)
 {
	while($cek = $sonuc->fetch_assoc())
	{
		$text=$cek['text'];
		echo $text;
	}
}

?>

</center>
</body>
</html>
