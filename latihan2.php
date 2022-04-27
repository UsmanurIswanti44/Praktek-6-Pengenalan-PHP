<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pemrograman PHP dengan Array</title>
</head>
<body>
	<?php 
	$nama[] = "Usmanur";
	$nama[] = "Dian";
	$nama[] = "Iswanti";
	echo $nama[1] . $nama[2] . $nama[0];
	echo "<br>";
	$jum_array = count($nama);
	echo "jumlah elemen array = ". $jum_array;
	?>
</body>
</html>