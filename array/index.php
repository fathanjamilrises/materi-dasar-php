<?php 
// Cara membuat array

// Cara ke 1
$warna = ["merah","putih","biru","kuning"];
// print_r($warna); // Cara menampilkan keseluruhan array

// Cara ke 2
$buah = array("pisang","semangka","mangga","stroberi");
// echo $buah[2]; // Mengakses array dalam bentuk string

// Array asosiatif dan Multimedi beserta studi kasus penggunaanya
$umur = [
    [
        "nama" => "Fathan",
        "umur" => 18
    ],
    [
        "nama" => "Budi",
        "umur" => 16
    ],
    [
        "nama" => "Yanto",
        "umur" => 17
    ],
];

// Built in fuction array

// Fungsi mengurutkan array dari terkecil
$angka = [9,8,7,6,5,4,3,2,1];
sort($angka);
print_r($angka);
// Fungsi menggabungkan array
$siswa1 = ["Nina","Adi","Ujang"];
$siswa2 = ["Yanto","Budi","Alya"];
$siswas = array_merge($siswa1,$siswa2);
print_r ($siswas);

// Beberapa built in fuction array lain dalam php

// array_merge
// Menggabungkan dua atau lebih array menjadi satu array.

// count
// Menghitung jumlah elemen dalam array.

// in_array
// Memeriksa apakah suatu nilai terdapat dalam array.

// array_keys
// Mengembalikan semua kunci (keys) dari sebuah array.

// array_values
// Mengembalikan semua nilai (values) dari sebuah array.

// array_push
// Menambahkan satu atau lebih elemen ke akhir array.

// array_pop
// Menghapus elemen terakhir dari array dan mengembalikannya.

// array_shift
// Menghapus elemen pertama dari array dan mengembalikannya.

// array_unshift
// Menambahkan satu atau lebih elemen ke awal array.

// array_slice
// Mengambil sebagian elemen dari array berdasarkan indeks tertentu.

// array_splice
// Menghapus, mengganti, atau menambahkan elemen di dalam array.

// array_reverse
// Membalik urutan elemen dalam array.

// array_map
// Menerapkan fungsi tertentu pada setiap elemen dalam array dan mengembalikan array baru.

// array_filter
// Menyaring elemen dalam array berdasarkan kondisi yang ditentukan.

// array_reduce
// Mengurangi array menjadi satu nilai dengan menerapkan fungsi tertentu secara iteratif.

// array_search
// Mencari nilai dalam array dan mengembalikan kunci pertama yang ditemukan.

// array_unique
// Menghapus elemen duplikat dalam array.

// sort
// Mengurutkan elemen array dalam urutan menaik.

// rsort
// Mengurutkan elemen array dalam urutan menurun.

// array_key_exists
// Memeriksa apakah kunci tertentu ada dalam array.
?>

<!-- Studi kasus penggunaan array asosiatif -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Asosiatif</title>
</head>
<body>
    <ul>
        <?php foreach($umur as $item): ?>
        <li>Nama Siswa : <?= $item["nama"]; ?></li>
        <li>Umur Siswa : <?= $item["umur"]; ?></li><br>
        <?php endforeach; ?>
    </ul>
</body>
</html>


