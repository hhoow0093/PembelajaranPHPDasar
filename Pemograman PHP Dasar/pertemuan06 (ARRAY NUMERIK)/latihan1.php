<?php
$angka = [1,2,3,4,5,6,7,8,9]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihann Array</title>
    <link href= "./style.css" rel="stylesheet"></link>
</head>
<body>
    <div class="container">
    <?php foreach($angka as $item){?>
        <div class="block"><?php echo $item?></div>
    <?php }?>
    </div>
</body>
</html>