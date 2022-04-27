<html>
<head>
	<title>Biodata</title></head>
<body>
<center><h1 >Masukkan Data Biodata Anda</h1></center>
</body>
<form action="biodata.php" method="POST" NAME="input" enctype="multipart/form-data">
	<table>
		<tr>
			<td></td>
			<td>Nim</td>
			<td><input type="text" name="nim" size="20" ></td>
		</tr>

		<tr>
			<td></td>
			<td>Nama</td>
			<td><input type="text" name="nama" size="20"></td>
		</tr>

		<tr>
			<td></td>
			<td>Alamat</td>
			<td><textarea cols="20" rows="5" name="alamat"></textarea></td>
		</tr>

		<tr>
			<td></td>
			<td>Jenis Kelamin</td>
			<td><input type="radio" name="jenis_kelamin" value="Pria" >Pria &nbsp;&nbsp;
				<input type="radio" name="jenis_kelamin" value="Wanita" >Wanita
			</td>
			</tr>

			<tr>
				<td></td>
				<td>Hobby</td>
				<td><input type="text" name="hobby" size="20"></td>
			</tr>

			<tr>
				<td></td>
				<td>Tanggal Lahir</td>
				<td><input type=date name=tanggal><br><br>
			</tr>

			<tr>
				<td></td>
				<td>Masukan Foto Anda</td>
				<td><input type=file name=file></td>
				<td></td>
			</tr>

			<tr>
				<td></td>
				<td>
					<input type="submit" name="Kirim" value="Proses">
				</td>
			</tr>

			</table>
		</form>
</body>
</html>