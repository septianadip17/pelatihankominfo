<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo 'Menggabungkan Script PHP ke Dalam HTML'?></title>
	<style>
		label {
			width: 100px;
			display: inline-block;
		}
		div {
			margin-bottom: 5px;
		}
	</style>
</head>
<body>
	<h2><?='Form Login'?></h2>
	<form method="post" action="dariweb2.php">
		<div>
			<label>Email</label><input type="text" name="email" value="<?=@$_POST['email']?>"/>
		</div>
		<div>
			<label>Password</label><input type="password" name"password"/>
		</div>
		<input type="submit" value="Log In"/>
	</form>
</body>
</html>