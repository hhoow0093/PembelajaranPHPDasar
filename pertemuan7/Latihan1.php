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

    ["penulis" => "michael",
     "tahunTerbit" => "2018",
     "Rating" => "4.8",
     "latarPendidikan" => ["sd", "sma", "S1 Teknik Informatika"],
     "foto" => "image.png"
    ],

    ["penulis" => "emily",
     "tahunTerbit" => "2020",
     "Rating" => "4.2",
     "latarPendidikan" => ["sd", "sma", "S1 Psikologi"],
     "foto" => "image.png"
    ],

    ["penulis" => "oliver",
     "tahunTerbit" => "2022",
     "Rating" => "4.9",
     "latarPendidikan" => ["sd", "sma", "S1 Hukum"],
     "foto" => "image.png"
    ],

    ["penulis" => "mia",
     "tahunTerbit" => "2012",
     "Rating" => "4.7",
     "latarPendidikan" => ["sd", "sma", "S1 Akuntansi"],
     "foto" => "image.png"
    ],

    ["penulis" => "noah",
     "tahunTerbit" => "2017",
     "Rating" => "4.3",
     "latarPendidikan" => ["sd", "sma", "S1 Manajemen"],
     "foto" => "image.png"
    ],

    ["penulis" => "ella",
     "tahunTerbit" => "2019",
     "Rating" => "4.6",
     "latarPendidikan" => ["sd", "sma", "S1 Komunikasi"],
     "foto" => "image.png"
    ],

    ["penulis" => "ben",
     "tahunTerbit" => "2021",
     "Rating" => "4.4",
     "latarPendidikan" => ["sd", "sma", "S1 Desain Grafis"],
     "foto" => "image.png"
    ],

    ["penulis" => "lily",
     "tahunTerbit" => "2023",
     "Rating" => "4.1",
     "latarPendidikan" => ["sd", "sma", "S1 Sastra Inggris"],
     "foto" => "image.png"
     ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php foreach( $buku as $item){?>
       
        <div class="bungkusan">
        <h2>Data Buku</h2>
            <p><?php echo $item["penulis"]?></p>
            <p><?php echo $item["tahunTerbit"]?></p>
            <p><?php echo $item["Rating"]?></p>
            <h3> Latar Pendidikan</p>
            <div>
                <?php foreach ($item["latarPendidikan"] as $pendidikan){ ?>
                <p><?php echo $pendidikan?></p>
                <?php }?>
                </div>
            <h4>Foto</h4>
            <img src="./image/<?php echo $item['foto']?>" alt="foto" height="100" width="100">   
        </div>
        
    <?php }?>    
</body>
</html>