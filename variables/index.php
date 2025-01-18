<?php
      /*  
       ⁡⁣⁢⁢ ⁡⁣⁢⁢Ciri dan Aturan Penamaan Variable⁡
            ⁡⁣⁣⁢Diawali dengan simbol $ (misalnya: $nama).
            Harus dimulai dengan huruf atau underscore _.
            Bersifat case-sensitive ($nama berbeda dengan $Nama).
            Tidak boleh mengandung spasi ($nama lengkap ❌).
            Tidak boleh menggunakan karakter khusus kecuali underscore (_).
            Tidak boleh dimulai dengan angka ($1nama ❌).⁡
    */

    $nama = "Fathan Jamil"; // Variable dengan tipe data string
    $Nama = "Budi"; // Variable dengan tipe data string dan penamaan yang sama namun berbeda karena variable dalam php berbeda
    $umur = 16; // Variable dengan tipe data integer
    $tinggi = 169.7; // Variable dengan tipe data float
    $pacar = false; // Variable dengan tipe data boolean

    echo "Nama Saya " .$nama ." Dan Umur Saya Adalah " .$umur ." Dan Tinggi Saya " .$tinggi ; 
?>