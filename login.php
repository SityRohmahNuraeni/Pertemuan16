<?php 
session_start();

if(isset($_SESSION["login"])){
	header("Location : index.php");
	exit;
}

require 'function.php';

if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$Password = $_POST["Password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	// cek username
	if(mysqli_num_rows($result) === 1){

	// cek password
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"] )){
			$_SESSION["login"] = true;
			header("Location: index.php");
			exit;
		}
	}
	$error = true;

}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h2>Halaman Anda Untuk Login</h2>
	<?php if (isset($error)) : ?>
		<p style="color : red ; font-style: italic;">Username/Password Salah!!!</p>
	<?php endif ?>
	<form action="" method="post">
	<ul>
		<li><label for="username">Username</label></li>
		<li><input type="text" name="username" class="form-control" id="username" placeholder="Masukan Username Anda"></li>

		<li><label for="username">Password</label></li>
		<li><input type="Password" name="Password" class="form-control" id="Password" placeholder="Password"></li>
		<br><br>
		<li><button type="submit" name="register">LOGIN</button></li>
	
	</form>

	<li>
		<p>Belum Punya Akun, <a href="registrasi.php">Registrasi Disini</a></p>
	</li>
	</ul>
</body>
</html>