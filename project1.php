<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 'Yey Gajian!'?></title>
    <style>
        /* memberi warna background pada latar belakang web, mengatur gaya huruf . */
        body {
            background-color: black;
            font-family: 'Times New Roman', Times, serif;
        }
        /* Mengatur warna dan posisi pada tag h1 dan h2. */
        h1, h2 {
            color: #f1f1f1;
            text-align: center;
        }
        
        /* Mengatur warna, posisi dan juga letak atas bawah pada kelas container. */
        .container {
            color: #f1f1f1;
            text-align: center;
            padding: 10px;
        }
        /* Memberi warna pada tag p. */
        p {
            color: #f1f1f1;
        }
        /*  Meletakan posisi kelas hasil di tengah.*/
        .hasil {
            text-align: center;
        }
        /* input[type=text] {
            height: 40px;
        } */
    </style>
</head>
<form action="project2.php" method="post">
    <h1>Aplikasi Perhitungan Gaji</h1>
    <h2>Karyawan Paruh Waktu</h2>
    <div class="container">
        <label>Nama</label><br>
        <input type="text" placeholder="Namamu.." name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"><br>
    </div>

    <div class="container">
        <label>Posisi</label><br>
        <select name="posisi">
        <?php $position = ['Juru Masak', 'Pramusaji', 'Barista', 'Programmer'];
			foreach ($position as $posisi) {
				$selected = @$_POST['posisi'] == $posisi ? ' selected="selected"' : '';
				echo '<option value="' . $posisi . '"' . $selected . '>' . $posisi . '</option>';
			}?>
        </select>
    </div>

    <div class="container">
        <label>Lama Kerja (jam)</label><br>
        <input type="number" placeholder="Berapa jam kamu bekerja?" name="durasikerja" value="<?=@$_POST['durasikerja']?>"><br>
    </div>

    <div class="container">
        <label>Nomor Rekening</label><br>
        <input type="text" placeholder="..." name="norek" value="<?=@$_POST['norek']?>"><br>
    </div>
    
    <div class="container">
        <button type="submit" name="submit" value="<?=@$_POST['submit']?>">Mari Hitung!</button>
    </div>

    <footer>
        <div class="hasil">
            <p>Terima kasih banyak atas kerja keras dan dedikasi Kamu dalam bekerja. <br>
                Kamu benar-benar seorang pekerja yang luar biasa!</p>
        </div>

    </footer>

</form>

<body>

</body>

</html>