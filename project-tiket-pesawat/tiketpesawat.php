<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemesanan Tiket Pesawat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2 class="alert alert-primary text-center mt-2">Pendaftaran Rute Penerbangan</h2>
        <form method="POST" action="">
            <div class="form-group ">
                <label class="col-1" for="maskapai">Maskapai:</label>
                <input type="text" placeholder="Nama Maskapai" name="maskapai" value="<?= isset($_POST['maskapai']) ? $_POST['maskapai'] : '' ?>">
            </div>

            <div class="form-group ">
                <label>Bandara Asal:</label>
                <select class="col-sm-5 col-form-label mt-2" name="awal">
                    <?php $bandaraAsal = ['Soekarno-Hatta (CGK)', 'Husein Sastranegara (BDO)', 'Abdul Rachman Saleh (MLG)', 'Juanda (SUB)'];
                    foreach ($bandaraAsal as $awal) {
                        $selected = @$_POST['awal'] == $awal ? ' selected="selected"' : '';
                        echo '<option value="' . $awal . '"' . $selected . '>' . $awal . '</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="form-group ">
                <label>Bandara Tujuan:</label>
                <select class="col-sm-5 col-form-label mt-2" name="akhir">
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
                <input type="text" placeholder="Harga Tiket" name="tiket" value="<?= isset($_POST['tiket']) ? $_POST['tiket'] : '' ?>">
            </div>

            <button type="submit" class="btn btn-primary" name="submit" value="<?= @$_POST['submit'] ?>">Submit</button>
        </form>
    </div><br>

    <?php
    // Mengambil data json
    $json_data = file_get_contents('data_pesawat.json');
    // Mengdekode data json
    // Dekode adalah agar data tidak terbaca string
    $datas_json = json_decode($json_data, true);
    ?>

    <?php
    //array pajak
    $pajakAwal = [
        'Soekarno-Hatta (CGK)' => 50000,
        'Husein Sastranegara (BDO)' => 30000,
        'Abdul Rachman Saleh (MLG)' => 40000,
        'Juanda (SUB)' => 40000
    ];
    $pajakTujuan = [
        'Ngurah Rai (DPS)' => 80000,
        'Hasanuddin (UPG)' => 70000,
        'Inanwatan (INX)' => 900000,
        'Sultan Iskandarmuda (BTJ)' => 70000
    ];

    function totalPajak($pajakAwal, $pajakTujuan)
    {
        return $pajakAwal + $pajakTujuan;
    };
    function totalHarga($totalPajak, $hargaTiket)
    {
        return $totalPajak + $hargaTiket;
    };

    // cek apakah form telah disubmit
    if (isset($_POST['submit'])) {

        // mengambil data dari form input
        $maskapai = $_POST['maskapai'];
        $awal = $_POST['awal'];
        $akhir = $_POST['akhir'];
        $tiket = $_POST['tiket'];

        // Pemanggilan Function penambahan pajak
        $totalPajak = totalPajak($pajakAwal[$awal], $pajakTujuan[$akhir]);
        // Pemanggilan Function penambahan Total Harga
        $totalHarga = totalHarga($totalPajak, $tiket);

        // Penambahan array baru dengan isi yang user masukkan
        $arrayBaru = [
            "pesawat" => $maskapai,
            "bandara_asal" => $awal,
            "bandara_tujuan" => $akhir,
            "harga_tiket" => $tiket,
            "pajak" => $totalPajak,
            "total_harga" =>  $totalHarga
        ];

        // Penambahan array baru ke dalam data json
        array_push($datas_json["data"], $arrayBaru);
    } ?>

    <?php sort($datas_json["data"]) ?>
    <h3>Daftar Rute Tersedia</h3>

    <table class="center">
        <tr>
            <th>Maskapai</th>
            <th>Asal Penerbangan</th>
            <th>Tujuan Penerbangan</th>
            <th>Harga Tiket</th>
            <th>Pajak</th>
            <th>Total Harga</th>
        </tr>
        <?php foreach ($datas_json["data"] as $data_json) : ?>
            <tr>
                <td><?php echo $data_json['pesawat']; ?></td>
                <td><?php echo $data_json['bandara_asal']; ?></td>
                <td><?php echo $data_json['bandara_tujuan']; ?></td>
                <td><?php echo $data_json['harga_tiket']; ?></td>
                <td><?php echo $data_json['pajak']; ?></td>
                <td><?php echo $data_json['total_harga']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?= "<br>" ?>
    <div class="row justify-content-evenly">
        <h3>Harga Pajak</h3>


        <table class="col-3">
            <tr>
                <th>Bandara Asal</th>
                <th>Pajak</th>
            </tr>
            <?php foreach ($pajakAwal as $namaBandara => $harga) : ?>
                <tr>
                    <td><?php echo $namaBandara; ?></td>
                    <td><?php echo $harga; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        &nbsp;

        <table class="col-3">
            <tr>
                <th>Bandara Tujuan</th>
                <th>Pajak</th>
            </tr>
            <?php foreach ($pajakTujuan as $namaBandara => $harga) : ?>
                <tr>
                    <td><?php echo $namaBandara; ?></td>
                    <td><?php echo $harga; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>


</body>

</html>