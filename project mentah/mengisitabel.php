

<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data</title>
</head>
<body>
    <h1>Form Input Data</h1>
    <form method="POST" action="">
        <label for="maskapai">Maskapai:</label>
        <input type="text" name="maskapai" id="maskapai" required>
        <br>
        <br>
        <label for="awal">Asal Penerbangan:</label>
        <select class="col-sm-5 col-form-label mt-2">
                    <?php $bandaraAsal = ['Soekarno-Hatta (CGK)', 'Husein Sastranegara (BDO)', 'Hasanuddin (UPG)', 'Juanda (SUB)'];
			        foreach ($bandaraAsal as $awal) {
				        $selected = @$_POST['awal'] == $awal ? ' selected="selected"' : '';
				        echo '<option value="' . $awal . '"' . $selected . '>' . $awal . '</option>';
		    	    }
                    
                    ?>
                    </select>
        <br>
        <br>
        <label>Bandara Tujuan:</label>
                <select class="col-sm-5 col-form-label mt-2">
                    <?php $bandaraTujuan = ['Ngurah Rai (DPS)', 'Hasanuddin (UPG)', 'Inanwatan (INX)', 'Sultan Iskandarmuda (BTJ)'];
			        foreach ($bandaraTujuan as $akhir) {
				        $selected = @$_POST['akhir'] == $akhir ? ' selected="selected"' : '';
				        echo '<option value="' . $akhir . '"' . $selected . '>' . $akhir . '</option>';
		    	    }
                    ?>
                </select>
        <br>
        <br>
        <input type="submit" name="submit" value="submit">
    </form>

<?php
// inisialisasi array kosong
$data = array(
    array("Maskapai" => "Adam Air",
    "Asal Penerbangan" => "Soekarno-Hatta (CGK)",
    "Tujuan Penerbangan" => "Sultan Iskandarmuda (BTJ)",
    "Harga Tiket" => "2000000",
    "Pajak" => 120000,
    "Total Harga" => 2120000),

    array("Maskapai" => "Batik",
    "Asal Penerbangan" => "Husein Sastranegara (BDO)",
    "Tujuan Penerbangan" => "Sultan Iskandarmuda (BTJ)",
    "Harga Tiket" => "100000",
    "Pajak" => 100000,
    "Total Harga" => 200000),

    array("Maskapai" => "Batik",
    "Asal Penerbangan" => "Soekarno-Hatta (CGK)",
    "Tujuan Penerbangan" => "Hasanuddin (UPG)",
    "Harga Tiket" => "890000",
    "Pajak" => 120000,
    "Total Harga" => 1010000),

    array("Maskapai" => "Citilink",
    "Asal Penerbangan" => "Soekarno-Hatta (CGK)",
    "Tujuan Penerbangan" => "Sultan Iskandarmuda (BTJ)",
    "Harga Tiket" => "89000",
    "Pajak" => 120000,
    "Total Harga" => 209000),

    array("Maskapai" => "Garuda Indonesia",
    "Asal Penerbangan" => "Soekarno-Hatta (CGK)",
    "Tujuan Penerbangan" => "Ngurah Rai (DPS)",
    "Harga Tiket" => 1500000,
    "Pajak" => 130000,
    "Total Harga" => 1630000)
);

// cek apakah form telah disubmit
if(isset($_POST['submit'])) {
    // mengambil data dari form input
    $maskapai = $_POST['maskapai'];
    $awal = $_POST['awal'];
    $akhir = $_POST['akhir'];
    $tiket = $_POST['tiket'];
    $pajak = $_POST['pajak'];
    $total = $_POST['total'];

    // menambahkan data ke dalam array
    $data[] = array('Maskapai' => $maskapai, 'Asal Penerbangan' => $awal, 'Tujuan Penerbangan' => $akhir, 'Harga Tiket' => $tiket, 'Pajak' => $pajak, 'Total Harga' => $total);
    // $data[] = ar ray('Nama' => $nama, 'Alamat' => $alamat);
}
?>

    <?php if(sort($data) > 0): ?>
        <h2>Data Input:</h2>
        <table border="1">
            <tr>
                <th>Maskapai</th>
                <th>Asal Penerbangan</th>
                <th>Tujuan Penerbangan</th>
                <th>Harga Tiket</th>
                <th>Pajak</th>
                <th>Total Harga</th>
            </tr>
            <?php foreach($data as $row): ?>
                <tr>
                    <td><?php echo $row['Maskapai']; ?></td>
                    <td><?php echo $row['Asal Penerbangan']; ?></td>
                    <td><?php echo $row['Tujuan Penerbangan']; ?></td>
                    <td><?php echo $row['Harga Tiket']; ?></td>
                    <td><?php echo $row['Pajak']; ?></td>
                    <td><?php echo $row['Total Harga']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>