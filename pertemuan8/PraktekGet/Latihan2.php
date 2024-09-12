<?php
// untuk cek apakah ada data yang di request
if(!isset($_GET["penulis"]) || !isset($_GET["tahunTerbit"]) || !isset($_GET["Rating"]) || !isset($_GET["pendidikan"]) || !isset($_GET["foto"])){
    // location
    header("Location: Latihan1.php");
    exit;
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil get</title>
</head>
<body>
    <ul>
        <li>penulis:<?php echo $_GET["penulis"]?></li>
        <li>tahun terbit:<?php echo $_GET["tahunTerbit"]?></li>
        <li>rating:<?php echo $_GET["Rating"]?></li>
        <li>latar pendidikan:<?php echo $_GET["pendidikan"]?></li>
        <img src="./image/<?php echo $_GET["foto"]?>" alt="foto" height=100 width=100>
    </ul>
    
</body>
</html>