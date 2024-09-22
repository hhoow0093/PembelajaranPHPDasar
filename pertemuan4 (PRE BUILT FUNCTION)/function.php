<?php
date_default_timezone_set('Asia/Jakarta');
function greeting($name){
    $hour = (int)date("H");
    $hari = "";
    if($hour >= 0 && $hour <= 11){
        $hari .= "pagi"; 
    }
    else if($hour >= 12 && $hour <= 15){
        $hari .= "siang";
    }
    else if($hour >= 16 && $hour <= 18){
        $hari .= "sore";
    }
    else{
        $hari .= "malam" ;
    }
    return "selamat $hari, $name.";

} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan function</title>
</head>
<body>
    <h1><?php echo greeting("howard")?></h1>
</body>
</html>