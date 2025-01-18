<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <h1 align="center">Latihan Form Handling</h1>
    <br>
    <form action="index.php" method="post">
        <label for="name">Nama :</label>
        <input type="text" name="name" id="name">
        <label for="email">Email :</label>
        <input type="text" name="email" id="email">
        <input type="submit" value="kirim">
    </form>
</body>
</html>

<?php 
// Form handling
//Validasi form handling

// Validasi jika input ber id name dikirim dengan value null atau kosong, dan akan menampilkan daat bila dikirim dengan nilai yang tidak null
if(empty ($_POST["name"])){
    echo "Field Nama Masih Kosong <br>";
}else{
    // Menampilkan input yang sudah diberi id name dengan html special chars agar tidak terkena xss
    echo htmlspecialchars($_POST["name"]) ."<br>";
}

// Validasi jika input ber id email tidak dikirim, dan akan menampilkan data bila dikirim walaupun nilai nya null
if(!isset($_POST["email"])){
    echo "Field Email Masih Kosong <br>";
}
// Filter email agar sesuai dengan format
elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
    echo "Email Tidak Valid <br>";
}
else{
    // Menampilkan input yang sudah diberi id email dengan html special chars agar tidak terkena xss
    echo htmlspecialchars($_POST["email"]) ."<br>";
}
?>