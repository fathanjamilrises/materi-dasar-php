<?php 
// For Loop
// Sebuah Perulangan Yang Sudah Tau Akan Dijalankan Berapa Kali
for ($i = 0; $i <= 5; $i++){
    echo "Nomor = $i <br>";
}
echo "<br>";

for ($x = 5; $x >= 0 ; $x--){
    echo "<br>";
    for ($z = 1; $z <= $x; $z++){
        echo "$z";
    }
}

echo "<br>";

// While Loop
// Sebuah Perulangan Yang Akan DIjalankan Ketika Bernilai True
$a = 0;
while ($a <= 10){
    echo "Nomor = $a <br>";
    $a++;
}

echo "<br>";

// Do While Loop 
// Sebuah Perulangan Yang Sama Seperti While Namun Akan Menjalankan Setidaknya Satu Kondisi Walaupun Bernilai False
$k = 1;
do{
    echo "Nomor = $k <br>";
    $k++;
}while($k <= 20);

echo "<br>";

// Foreach Loop
// Sebuah Perulangan Yang Akan Mengulang Isi Dari Sebuah Array
$buah = ['apel','semangka','jeruk'];

foreach($buah as $item){
    echo "Buah = $item <br>";
}
?>