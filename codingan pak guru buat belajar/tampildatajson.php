<?php
// File json yang akan dibaca (full path file)
$file = "json/data.json";
// Mendapatkan file json
$data = file_get_contents($file);
// Mendecode data.json
$data = json_decode($data, true);
?>
<table border="1" class="tabel1">
<tr>
	<th>Maskapai</th>
	<th>Asal Penerbangan</th>
	<th>Tujuan Penerbangan</th>
	<th>Harga Tiket</th>
	<th>Pajak</th>
	<th>Total Harga Tiket</th>
</tr>
<?php
asort($data); //mengurutkan data berdasarkan maskapai dengan ascending 
// Membaca data array menggunakan foreach
foreach ($data as $view) { ?>
<tr>
	<td style="text-align:left;"><?php echo $view[0];?></td>
	<td><?php echo $view[1];?></td>
	<td><?php echo $view[2];?></td>
	<td style="text-align:right;"><?php echo $view[3];?></td>
	<td style="text-align:right;"><?php echo $view[4];?></td>
	<td style="text-align:right;"><?php echo $view[5];?></td>
</tr>

<?php
}
?>
</table>