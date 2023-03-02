<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo 'Terima kasih! :)'?></title>
	<style>
		body{
			background-color: black;
			color: white;
			text-align: center;
			padding: 50px;
		}
	</style>
</head>
<body>
<?php
if (isset($_POST['submit'])) {
	echo 'Halo ' . $_POST['nama'] . '<br/>';
	echo 'Terima kasih telah menjadi ' . $_POST['posisi'] . ' paruh waktu di Perusahaan kami. <br>';
	echo 'Kamu telah bekerja selama ' . $_POST['durasikerja'] . ' jam di minggu ini. <br>';
	echo 'Gaji kamu akan kami transfer ke nomor rekening ' .$_POST['norek'] . '<br>';
	
	
}?>

<?php
	$gajiPosisi = 0;
	if($_POST['posisi'] ==  "Juru Masak"){
		$gajiPosisi = 100;
	}else if($_POST['posisi'] ==  "Pramusaji"){
		$gajiPosisi = 90;
	}else if ($_POST['posisi'] == "Barista"){
		$gajiPosisi = 80;
	}else {
		$gajiPosisi = 200;
	}
	echo '<br>Bayaran perjam kamu adalah ' .$gajiPosisi .'$ dan kamu bekerja selama ' .$_POST['durasikerja']. ' jam di minggu ini.';
	echo '<br><h3>Maka ' .$gajiPosisi . '$ * ' .$_POST['durasikerja'] . ' = '.($gajiPosisi * $_POST['durasikerja']) . '$</h3>';
	echo '<br>Uang yang akan kami transfer ke nomor rekening kamu sebesar: ' ;
	echo '<h1>'.($gajiPosisi * $_POST['durasikerja']) .'$ </h1>';

	echo '<h4>Senang bisa bekerja sama denganmu. <br> 
	Terima kasih banyak pahlawan!</h4>'
?>

</body>
</html>