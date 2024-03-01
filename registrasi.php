<?php 
require 'function.php';

if (isset($_POST["register"])) {
	if(registrasi($_POST) > 0) {
		echo "<script>
				alert('user baru berhasil ditambahkan');
				</script>
				";
	}
	else{
		echo mysqli_error($conn);
	}
}

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<style>
.container {
	box-shadow: 0 3px 20px rgba(0, 0, 0,3);
	margin-top: 20%;
	margin-left: 38%;
	padding: 20px;
	width: 350px;
	background-color: whitesmoke;
}

body {
	background-color: #5F9EA0;
}

ul {
	list-style: none;
}

button {
	background: #5F9EA0;
	padding-right: 50%;
	text-align: center;
}
	



</style>
<body>
	<h2>Registrasi</h2>
	<form method="post" action="">
	<div class="from-group">
	<ul>
		<li><label for="username">Username</label></li>
		<li><input type="text" name="username" class="form-control" id="username" placeholder="Masukan Username Anda"></li>

		<li><label for="username">Password</label></li>
		<li><input type="Password" name="Password" class="form-control" id="Password" placeholder="Password"></li>

		<li><label for="Password2">Konfirmasi Password</label></li>
		<li><input type="Password" name="Passwword" class="form-control" id="Password2" placeholder="Konfirmasi Password"></li>

		<li><button type="submit" name="register">Register</button></li>
	</ul>
	</div>
	</form>
</body>
</html>