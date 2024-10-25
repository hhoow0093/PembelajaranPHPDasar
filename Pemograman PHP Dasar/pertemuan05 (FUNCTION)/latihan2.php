<?php
$angka = [1,23,21,11,22,78,211,658,337,318,555];
$angka[] = 2; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menampilkan isi element dalam array</title>
    <link href="./style.css"  rel="stylesheet"></link>
</head>
<body>
<!-- menggunakan loop biasa-->
    <?php for($i = 0; $i < count($angka); $i++){?>
        <div class="kotak"><?php echo $angka[$i];?></div>
    <?php }?>
<!--menggunakan fungsi for each-->
    <?php foreach($angka as $item){?>
        <div class="kotak"><?php echo $item;?></div>
    <?php }?>
    
</body>
</html>