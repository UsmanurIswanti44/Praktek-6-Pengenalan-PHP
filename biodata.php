<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">Biodatakuu</h1>
	</header>
</div>
</body>
</html>

<?php
if(empty($_POST['nama'])){
	header("Location:kosong.php");
}else{
	$nim=$_POST['nim'];
	echo "Nim &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $nim"."<br>";

	$nama=$_POST['nama'];
	echo "Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:$nama"."</br>";

	$alamat=$_POST['alamat'];
	echo "Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $alamat"."<br>";

	$jenis_kelamin=$_POST['jenis_kelamin'];
	echo "Jenis kelamin : $jenis_kelamin"."<br>";

	$hobby=$_POST['hobby'];
	echo "Hobby &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $hobby"."<br>";

	$tanggal=$_POST['tanggal'];
	echo "Tanggal lahir &nbsp;: $tanggal"."<br>";

	echo "<br>";
	$file=$_FILES['file']['name'];
	$tmp_name=$_FILES['file']['tmp_name'];
	
	move_uploaded_file($tmp_name, "images".$file); 
?>
<table border="1">
	<tr>
		<td>Foto Saya</td>
	</tr>

	<tr>
		<td> <img src="images<?php echo $file ?>" style="width:540px"></td>
	</tr>
</table>

<?php }?>
	
