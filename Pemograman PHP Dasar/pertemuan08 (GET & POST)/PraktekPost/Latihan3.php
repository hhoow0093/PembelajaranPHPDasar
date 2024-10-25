<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <?php if(isset($_POST["submit"]) && !empty($_POST["nama"])){?>
        <h1>Selamat datang <?php echo $_POST["nama"]?></h1>
    <?php }?>
    <form action="Latihan4.php" method="post">
        masukkan nama: <input type="text" name="nama" ><br>
        <button type="submit" name="submit">submit</button>
    </form>
    
</body>
</html>