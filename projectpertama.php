<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: black;
            font-family: 'Times New Roman', Times, serif;
        }
        h1{
            color: #f1f1f1;
            text-align: center;
        }
        h2{
            color: #f1f1f1;
            text-align: center;
        }
        .container{
            color: #f1f1f1;
        }
    </style>
    <title>Yey Gajian!</title>
</head>
    <form action="/action_page.php" method="post">
        <h1>Aplikasi Perhitungan Gaji</h1>
        <h2>Karyawan Paruh Waktu</h2>
            <div class="container">
                <label for="uname"><b>Nama</b></label><br>
                    <input type="text" placeholder="Namamu.." name="uname" required><br>

                <label for="posisi">Posisi</label><br>
                    <select id="posisi" name="posisition">
                        <option value="jurumasak">Juru Masak</option>
                        <option value="pramusaji">Pramusaji</option>
                        <option value="barista">Barista</option>
                    </select><br>
                
                <label>Lama Kerja</label>
                <input type="text" placeholder="1" name="uname" required><p>Jam</p>

        
                <button type="submit">Mari Hitung!</button>
            </div>

    </form>

<body>
    
</body>
</html>