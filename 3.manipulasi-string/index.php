<?php 
// Penggabungan  String 

// Cara Pertama
$firstName = "John";
$lastName = "Doe";
$fullName = $firstName ." ". $lastName;
echo $fullName ."<br>";

// Cara Kedua
$first_name = "John";
$last_name = "Doe";
$full_name = "$first_name $last_name";
echo $full_name;

// Pencarian String 
$myName = "Jamil Fathan Jamil";

// Cara 1
$searchStr = strpos($myName, "Jamil"); // akan mencari posisi substring "Jamil" pada variable $myName dan akan mengembalikan posisi pertama yang ditemukan

// Cara 2
$search_str = strrpos($myName, "Jamil"); // akan mencari posisi terakhir "Jamil" pada variable $myName
?>