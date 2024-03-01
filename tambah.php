<?php
session_start;

if(! isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

require 'function.php';

	if (isset($_POST["submit"])) {
		if (tambah($_POST) > 0){
			echo "
				<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'index.php';
				</script>
				";
		}else {
			echo "
			<script>
				alert('data gagal ditambahkan');
				document.location.href = 'index.php';
				</script>
				";
		}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tambah siswa</title>
</head>
<body>
	<h2>Tambah Data Siswa</h2>

	<form action="" method="post">
		<ul>
			<li>
		<label for="nama">Nama : </label>
		<input type="text" name="nama" id="nama" required>
			</li>
			<li>
		<label for="nis">NIS : </label>
		<input type="text" name="nis" id="nis" required>
			</li>
			<li>
		<label for="email">Email : </label>
		<input type="text" name="email" id="email">
			</li>
			<li>
		<label for="jurusan">Jurusan : </label>
		<input type="text" name="jurusan" id="jurusan">
			</li>
			<li>
		<label for="gambar">Gambar : </label>
		<input type="text" name="gambar" id="gambar">
			</li>
			<br>
			<li>
				<button type="submit" name="submit">Tambah Data</button>
			</li>
		</ul>
		
	</form>

</body>
</html>