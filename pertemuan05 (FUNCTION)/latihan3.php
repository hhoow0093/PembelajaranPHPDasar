<?php
$mahasiswa = [
    ["Howard", "99772", "belajar", "3.94"],
    ["Alice", "99881", "reading", "3.75"],
    ["Bob", "99882", "swimming", "3.80"],
    ["Charlie", "99883", "gaming", "3.90"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List mahasiswa</h1>
        <?php foreach($mahasiswa as $item){?>
        <ul>
            <li><?php echo $item[0]?></li>
            <li><?php echo $item[1]?></li>
            <li><?php echo $item[2]?></li>
            <li><?php echo $item[3]?></li>
        </ul>
        <?php }?>
</body>
</html>
