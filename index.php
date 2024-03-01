<?php 
session_start;

if(! isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
require 'function.php';
$siswa = query("SELECT * FROM siswa");

if(isset($_POST["cari"])) {
	$siswa = cari($_POST["keyword"]);
}
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Siswa</title>
 </head>
 <body>
 	<a href="logout.php">Logout</a>
 	<h2>Daftar Siswa</h2>
       <br>   
       <a href="tambah.php">Tambah Data Siswa</a>  
       <br> <br>
 	<table border="1" cellspacing="0">
 		<tr>
 			<th>No</th>
 			<th>Aksi</th>
 			<th>Gambar</th>
 			<th>Nis</th>
 			<th>Nama</th>
 			<th>Email</th>
 			<th>Jurusan</th>
 		</tr>
        <?php $i=1; ?>
        <?php foreach($siswa as $swa) : ?>

 		<tr>
 			<td><?= $i; ?></td>
 			<td><a href="ubah.php?id=<?= $swa["id"]; ?> "onclick= "return confirm('apakah anda yakin ingin mengubah')">ubah</a> | 
                <a href="hapus.php?id=<?= $swa["id"]; ?> "onclick= "return confirm('apakah anda yakin ingin menghapus') ">hapus</a></td>
 			<td><img src="img/<?= $swa["gambar"]; ?>"></td>
 			<td><?= $swa["nis"]; ?></td>
 			<td><?= $swa["nama"]; ?></td>
 			<td><?= $swa["email"]; ?></td>
 			<td><?= $swa["jurusan"]; ?></td>
 		</tr>
        <?php $i++; ?>
    <?php endforeach; ?>
 	</table>
 
 </body>
 </html>