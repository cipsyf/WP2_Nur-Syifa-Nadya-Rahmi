<?php 
    $bln = date("M");
    switch($bln)
    {
        case "Jan" : $namaBln = "Januari";
        break;
        case "Feb" : $namaBln = "Februari";
        break;
        case "Mar" : $namaBln = "March";
        break;
        case "Apr" : $namaBln = "April";
        break;
        case "May" : $namaBln = "May";
        break;
        case "Jun" : $namaBln = "June";
        break;
        case "Jul" : $namaBln = "July";
        break;
        case "Aug" : $namaBln = "Agustus";
        break;
        case "Sep" : $namaBln = "September";
        break;
        case "Oct" : $namaBln = "Oktober";
        break;
        case "Nov" : $namaBln = "November";
        break;
        case "Dec" : $namaBln = "December";
        break;
    }
    echo "Nama bulan sekarang adalah : ".$namaBln;
?>