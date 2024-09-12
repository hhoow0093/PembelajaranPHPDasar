<?php
// array associative -> merupakan sebuah array yang dipanggil berdasarken string pada array
// contoh:
$buku = [
    ["penulis" => "howard",
     "tahunTerbit" => "2010",
     "Rating" => "5",
     "latarPendidikan" => ["sd", "sma", "S1 Infomatika"],
     "foto" => "image.png"
    ],
     

    ["penulis" => "jane",
     "tahunTerbit" => "2015",
     "Rating" => "4.5",
     "latarPendidikan" => ["sd", "sma", "S2 Ekonomi"],
     "foto" => "image.png"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Get</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>
<h2>Data Buku</h2>
    <?php foreach( $buku as $item){?>
    <?php $pendidikan = implode(",", $item["latarPendidikan"]);?>
        <ul class="bungkusan">
            <li><a href="Latihan2.php?penulis=<?php echo $item["penulis"];?>&tahunTerbit=<?php echo $item["tahunTerbit"];?>&Rating=<?php echo $item["Rating"];?>&pendidikan=<?php echo $pendidikan?>&foto=<?php echo $item["foto"];?>"><?php echo $item["penulis"];?></a></li>
    </ul>
    <?php }?>    
</body>
</html>