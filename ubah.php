<?php
session_start;

if(! isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

require 'function.php';
$id = $_GET["id"];
$swa = query("SELECT * FROM siswa WHERE id=$id") [0];




	if (isset($_POST["submit"])) {
		if (ubah($_POST) > 0){
			echo "
				<script>
				alert('data berhasil diubah');
				document.location.href = 'index.php';
				</script>
				";
		}else {
			echo "
			<script>
				alert('data gagal diubah');
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
	<title>ubah siswa</title>
</head>
<body>
	<h2>Ubah Data Siswa</h2>

	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $swa["id"] ?>">
		<ul>
			<li>
		<label for="nama">Nama : </label>
		<input type="text" name="nama" id="nama" required value="<?= $swa["nama"] ?>">
			</li>
			<li>
		<label for="nis">NIS : </label>
		<input type="text" name="nis" id="nis" required value="<?= $swa["nis"] ?>">
			</li>
			<li>
		<label for="email">Email : </label>
		<input type="text" name="email" id="email" required value="<?= $swa["email"] ?>">
			</li>
			<li>
		<label for="jurusan">Jurusan : </label>
		<input type="text" name="jurusan" id="jurusan" required value="<?= $swa["jurusan"] ?>">
			</li>
			<li>
		<label for="gambar">Gambar : </label>
		<input type="text" name="gambar" id="gambar" required value="<?= $swa["gambar"] ?>">
			</li>
			<br>
			<li>
				<button type="submit" name="submit">Ubah Data</button>
			</li>
		</ul>
		
	</form>

</body>
</html>