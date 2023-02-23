<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo 'Menggabungkan Script PHP ke Dalam HTML'?></title>
</head>
<body>
	<?php
	$email = 'user_email@gmail.com';
	// atau $email = $_SESSION['email'];
	
	// Jika user belum login
	if ($email == '')
	{
		?>
		<h2><?='Form Login'?></h2>
		<form method="post" action="">
			<div>
				<label>Email</label><input type="text" name="email" value="<?=@$_POST['email']?>"/>
			</div>
			<div>
				<label>Password</label><input type="password" name"password"/>
			</div>
			<input type="submit" value="Log In"/>
		</form>
		<?php
	} else {
	// Jika login, tampilkan halaman user
		?>
		<h2>Selamat datang <?=$email?></h2>
		<ul>
			<li><a href="#">Lihat atau edit profil</a></li>
			<li><a href="#">Ubah Password</a></li>
			<li><a href="#">Logout</a></li>
		</ul>
		<?php
	}?>
</body>
</html>