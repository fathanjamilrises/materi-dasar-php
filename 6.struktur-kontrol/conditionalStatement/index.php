<?php

// If Statement dan Else Statement

// If Statement akan dijalankan ketika kondisi benar sementara else statement sebaliknya
$nilai = 90;
if ($nilai >= 75){
    echo "anda lulus dengan nilai $nilai"; // Output akan mengkhasilkan "anda lulus dengan nilai $nilai" apabila variable $nilai lebih dari atau sama dengan 75 
}else{
    echo "anda belum lulus dengan nilai $nilai"; // sedangkan Output akan mengkhasilkan "anda belum lulus dengan nilai $nilai" apabila variable $nilai kurang dari 75 
}

echo "<br>";


// Else If Statement
$totalBelanja = 100.000;

if ($totalBelanja <= 50.000){
    echo "anda mendapat diskon 20%"; // Output akan mengkhasilkan "anda mendapat diskon 20%" apabila variable $totalBelanja kurang dari atau sama dengan 50.000
} else if ($totalBelanja >= 50.001 && $totalBelanja <= 100.000){
    echo "anda mendapat dison 30%"; // Sedangkan Output akan mengkhasilkan "anda mendapat diskon 30%" apabila variable $totalBelanja lebih dari atau sama dengan 50.001 dan kurang dari atau sama dengan 100.001
}
 echo "<br>";

// Switch Statement
$makananFavorit = "mie";

switch($makananFavorit){
    case "bakso":
    echo "Makanan Favorit Anda Adalah Bakso";
    break;
    case "mie":
    echo "Makanan Favorit Anda Adalah Mie";
    break;
    default:
    echo "Makanan Favorit Anda Tidak Diketahui";

}
?>