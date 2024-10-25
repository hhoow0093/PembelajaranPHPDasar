<?php if(!isset($_POST["submit"]) || empty($_POST["nama"])){
    header("Location: Latihan3.php");
    exit;
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat datang <?php echo $_POST["nama"]?></h1>
</body>
</html>