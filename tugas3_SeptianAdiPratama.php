<?php
	echo "===================CETAK BILANGAN GANJIL GENAP 1-100=================== <br>";
    for($bilanganGanjilGenap=1;$bilanganGanjilGenap<=100;$bilanganGanjilGenap++){
        if($bilanganGanjilGenap % 2 == 0){
            echo "$bilanganGanjilGenap adalah Bilangan Genap.<br>";
        }
        else{
            echo "$bilanganGanjilGenap adalah Bilangan Ganjil.<br>";
        }
    }
?>