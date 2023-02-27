<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemesanan Tiket Pesawat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="alert alert-primary text-center mt-2">Pendaftaran Rute Penerbangan</h2>
        <form>
            <div class="form-group ">
                <label for="maskapai">Maskapai:</label>
                <input type="text" placeholder="Nama Maskapai" id="maskapai">
            </div>

            <div class="form-group ">
                <label>Bandara Asal:</label>
                <select class="col-sm-5 col-form-label mt-2">
                    <?php $bandaraAsal = ['Soekarno-Hatta (CGK)', 'Husein Sastranegara (BDO)', 'Hasanuddin (UPG)', 'Juanda (SUB)'];
			        foreach ($bandaraAsal as $awal) {
				        $selected = @$_POST['awal'] == $awal ? ' selected="selected"' : '';
				        echo '<option value="' . $awal . '"' . $selected . '>' . $awal . '</option>';
		    	    }
                    ?>
                    </select>
            </div>

            <div class="form-group ">
                <label>Bandara Tujuan:</label>
                <select class="col-sm-5 col-form-label mt-2">
                    <?php $bandaraTujuan = ['Ngurah Rai (DPS)', 'Hasanuddin (UPG)', 'Inanwatan (INX)', 'Sultan Iskandarmuda (BTJ)'];
			        foreach ($bandaraTujuan as $akhir) {
				        $selected = @$_POST['akhir'] == $akhir ? ' selected="selected"' : '';
				        echo '<option value="' . $akhir . '"' . $selected . '>' . $akhir . '</option>';
		    	    }
                    ?>
                </select>
            </div>

            <div class="form-group ">
                <label for="hargaTiket">Harga Tiket:</label>
                    <h2>0</h2>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div><br>

    <table class="text-center">
        <thead class="container text-center">
            <tr>
                <th scope="col">Maskapai</th>
                <th scope="col">Asal Penerbangan</th>
                <th scope="col">Tujuan Penerbangan</th>
                <th scope="col">Harga Tiket</th>
                <th scope="col">Pajak</th>
                <th scope="col">Total Harga Tiket</th>
            </tr>
    </thead>
    <tbody>
    <tr>
        <td>Adam Air</td>
        <td>Soekarno-Hatta (CGK)</td>
        <td>Sultan Iskandarmuda (BTJ)</td>
        <td>2000000</td>
        <td>120000</td>
        <td>2120000</td>
    </tr>
    <tr>
        <td>Batik</td>
        <td>Husein Sastranegara (BDO)</td>
        <td>Sultan Iskandarmuda (BTJ)</td>
        <td>100000</td>
        <td>100000</td>
        <td>200000</td>
    </tr>
    <tr>
        <td>Batik</td>
        <td>Soekarno-Hatta (CGK)</td>
        <td>Hasanuddin (UPG)</td>
        <td>890000</td>
        <td>120000</td>
        <td>1010000</td>
    </tr>
    <tr>
        <td>Citilink</td>
        <td>Soekarno-Hatta (CGK)</td>
        <td>Sultan Iskandarmuda (BTJ)</td>
        <td>89000</td>
        <td>120000</td>
        <td>209000</td>
    </tr>
    <tr>
        <td>Garuda Indonesia</td>
        <td>Soekarno-Hatta (CGK)</td>
        <td>Ngurah Rai (DPS)</td>
        <td>1500000</td>
        <td>130000</td>
        <td>1630000</td>
    </tr>
    </tbody>
</table>
<br><br><br>

    <?php
        $data = array(
        array("Adam Air",
        "Soekarno-Hatta (CGK)",
        "Sultan Iskandarmuda (BTJ)",
        "2000000",
        120000,
        2120000),

        array("Batik",
        "Husein Sastranegara (BDO)",
        "Sultan Iskandarmuda (BTJ)",
        "100000",
        100000,
        200000),

        array("Batik",
        "Soekarno-Hatta (CGK)",
        "Hasanuddin (UPG)",
        "890000",
        120000,
        1010000),

        array("Citilink",
        "Soekarno-Hatta (CGK)",
        "Sultan Iskandarmuda (BTJ)",
        "89000",
        120000,
        209000),

        array("Garuda Indonesia",
        "Soekarno-Hatta (CGK)",
        "Ngurah Rai (DPS)",
        1500000,
        130000,
        1630000)
    );

echo "<table>";
echo "<tr >
                <th>Maskapai</th>
                <th>Asal Penerbangan</th>
                <th>Tujuan Penerbangan</th>
                <th>Harga Tiket</th>
                <th>Pajak</th>
                <th>Total Harga Tiket</th>
            </tr>";
foreach ($data as $row) {
    echo "<tr>
                    <td>" . $row[0] . "</td>
                    <td>" . $row[1] . "</td>
                    <td>" . $row[2] . "</td>
                    <td>" . $row[3] . "</td>
                    <td>" . $row[4] . "</td>
                    <td>" . $row[5] . "</td>
                </tr>";
}
echo "</table>";
?>


<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script> -->

</body>

</html>