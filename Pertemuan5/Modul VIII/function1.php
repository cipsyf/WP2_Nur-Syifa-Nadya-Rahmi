<?php 
    function volume($luas, $tinggi){
        $volume = $luas * $tinggi;
        echo "Volume  ialah: $volume cm";
    }

    function luas_persegi($p, $l, $t){
        $luas = $p * $l;
        echo "Luas persegi ialah: $luas cm <br>";
        volume($luas, $t);
    }

    $panjang = 20;
    $lebar = 10;
    $tinggi = 5;

    echo "Panjang persegi: $panjang cm <br>";
    echo "Lebar persegi: $lebar cm <br>";
    echo "Tinggi persegi: $tinggi cm <br><br>";
    luas_persegi($panjang, $lebar, $tinggi);
?>