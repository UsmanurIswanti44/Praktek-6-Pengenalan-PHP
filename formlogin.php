<?php
//ambil nilai variabel error
if(isset($_GET['error'])){
	$error=$_GET['error'];
}else{
	$error="";}
//menyisipkan pesan kesalahan 
$pesan="";
if($error=="variabel_belum_diset"){//ketika variabel belum diset
	$pesan="<h3>Maaf, anda harus mengakses halaman ini dari formlogin.php</h3>";
}
if($error=="nama_kosong"){//ketika nama kosong
	$pesan="<h3>Maaf, anda harus mengisi nama</h3>";
}
if($error=="email_kosong"){//ketika email kosong
	$pesan="<h3>Maaf, anda harus mengisi email</h3>";
}
?>
<html>
<head>
	<title>Form Login</title>
</head>
<body>
	<h2>Form Login</h2>
	<?php
	echo $pesan;
	?>
	<form action="proses.php"method="get">
		Nama  :  <input type="text" name="nama"/><br><br/>
		Email :  <input type="text" name="email"/><br><br/>
		<input type="submit" value="Submit">
	</form>
</body>
</html>