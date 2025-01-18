<?php 
//Macam Macam Tipe Data

$str = "Ini Tipe Data String"; // Tipe Data String
$int = 78; // Tipe Data Integer
$flo = 99.0; // Tipe Data Float/Double
$arr = [1,2,3,4,5,6,7]; // Tipe Data Array
$bool = true; // Tipe Data Boolean
$null = null; // Tipe Data Null

// Check Tipe Data
echo gettype($flo) ."<br>";
var_dump($arr);
echo"<br>";
echo is_int($int); // Output 1 Atau True

?>