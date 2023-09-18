<?php
$jari = 5;
$sisi = 10;
$phi = 3.14;

$luasAlas = $phi * $jari * $jari;
$luasSelimut = $phi * $jari * $sisi;
$luasPermukaan = $luasAlas + $luasSelimut;

echo("<b>Keterangan:</b><br>");
echo("Jari-jari = 5 <br> Panjang sisi kerucut = 10 <br> Phi = 3.14 <br><br>");
echo("Luas alas = ".$luasAlas."<br>");
echo("Luas permukaan = ".$luasPermukaan)
?>