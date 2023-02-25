<form method="post" >
    Jumlah Bintang= <input type="number" name="angka">
    <input type="submit" name="submit" value="kirim">
</form>

<?php
if(isset($_POST['angka'])){
    $angka = $_POST['angka'];
    for($i=0; $i<$angka; $i++){
    for($j=0; $j<=$i; $j++){
        echo "* ";
    }
    echo "<br>";
    }
}
?>

