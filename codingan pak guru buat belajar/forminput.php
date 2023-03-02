<?php 
//harga pajak bandara asal
$asal = [
			["Soekarno-Hatta (CGK)",50000],
			["Husein Sastranegara (BDO)",30000],
			["Abdul Rachman Saleh (MLG)",40000],
			["Juanda (SUB) ",40000]			
					
		 ];
//harga pajak bandara tujuan
$tujuan = [
			["Ngurah Rai (DPS)",80000],
			["Hasanuddin",70000],
			["Inanwatan (INX)",90000],
			["Sultan Iskandarmuda (BTJ)",70000]			
		 ];

//fungsi untuk menghitung total pajak
function pajak($asal,$tujuan){
	$tarifpajak = $asal + $tujuan ;
	return $tarifpajak;

}


if(isset($_POST['simpan'])){
	
$maskapaip = $_POST['maskapai'];
$pasal = explode("-",$_POST['asal']); //  Soekarno-Hatta-50000
$ptujuan = explode("#",$_POST['tujuan']);
$harga = $_POST['harga']; 

$file = "json/data.json"; //folder dimana file json berada 
$open = file_get_contents($file); //mengambil data json
$data = json_decode($open); //menerjemahkan file json ke array

$totalpajak = pajak($pasal[1],$ptujuan[1]); //fungsi menghitung pajak
$totaltarif = $harga + $totalpajak; //menghitung harga + pajak

$data[] = [$maskapaip,$pasal[0],$ptujuan[0],$harga,$totalpajak,$totaltarif]; //menampung hasil post kedalam variabel array

// Mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// Menyimpan data ke dalam data.json
file_put_contents($file, $jsonfile);
header('Location: forminput.php');
}	

?>
<!DOCTYPE html>
<html>
<head>
	<title>PENERBANGAN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<form action="" method="post">
<fieldset>
	<legend>PENERBANGAN</legend>
	<p>
		<label for="full-name"> Nama Maskapai </label>
		
		<input  name="maskapai" type="text" required />
	</p>
	<p>
		<label for="asal" style="margin-right: 25px;">
			Bandara Asal
		</label>
		<select name="asal">
			<?php foreach($asal as $p_asal){ ?>
			<option value="<?php echo $p_asal[0].'-'.$p_asal[1]?>"><?php echo $p_asal[0]?></option>
			<?php } ?>
		</select>
	</p>
	<p>
		<label for="tujuan" style="margin-right: 10px">
			Bandara Tujuan
		</label>
		<select name="tujuan">
			<?php foreach($tujuan as $p_tujuan){ ?>
			<option value="<?php echo $p_tujuan[0].'#'.$p_tujuan[1]?>"><?php echo $p_tujuan[0]?></option>
			<?php } ?>
		</select>
	</p>
	<p>
		<label for="berkas" style="margin-right: 34px">
			Harga
		</label>
		<input  name="harga" type="number" required />
	</p>
	<p>
		<button type="submit" name="simpan">SIMPAN</button>
	</p>
</fieldset>
</form>


<hr>
<?php include('tampildatajson.php');?>

</body>
</html>