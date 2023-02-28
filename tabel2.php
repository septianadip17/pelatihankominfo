<?php
// inisialisasi array kosong
$data = array(
    array('Nama' => 'John', 'Alamat' => 'Jakarta'),
    array('Nama' => 'Sarah', 'Alamat' => 'Bandung'),
    array('Nama' => 'Peter', 'Alamat' => 'Surabaya'),
    array('Nama' => 'Mary', 'Alamat' => 'Medan')
);

// cek apakah form telah disubmit
if(isset($_POST['submit'])) {
    // mengambil data dari form input
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    // menambahkan data ke dalam array
    $data[] = array('Nama' => $nama, 'Alamat' => $alamat);

    // mengurutkan data berdasarkan nama secara ascending
    usort($data, function($a, $b) {
        return strcmp($a['Nama'], $b['Nama']);
    });
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data</title>
</head>
<body>
    <h1>Form Input Data</h1>
    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
        <br>
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat" required>
        <br>
        <input type="submit" name="submit" value="Tambah Data">
    </form>

    <?php if(count($data) > 0): ?>
        <h2>Data Input:</h2>
        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
            <?php foreach($data as $row): ?>
                <tr>
                    <td><?php echo $row['Nama']; ?></td>
                    <td><?php echo $row['Alamat']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>