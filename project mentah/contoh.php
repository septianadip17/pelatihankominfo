<?php
// Inisialisasi array kosong untuk menyimpan data input
$data = array();

// Cek apakah formulir sudah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // Tambahkan data ke dalam array
    $data[] = array(
        'nama' => $nama,
        'email' => $email,
        'pesan' => $pesan
    );
}
?>

<!-- Formulir input -->
<form method="post" action="">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama"><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br>

    <label for="pesan">Pesan:</label>
    <textarea id="pesan" name="pesan"></textarea><br>

    <input type="submit" value="Kirim">
</form>

<!-- Tabel data input -->
<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $item) { ?>
        <tr>
            <td><?php echo $item['nama']; ?></td>
            <td><?php echo $item['email']; ?></td>
            <td><?php echo $item['pesan']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
