<?php
$error = false;
if(isset($_POST["submit"])){
    if($_POST["username"] == "admin" && $_POST["password"] == "123"){
        header("Location: admin.php");
        exit;
    }
    else{
        $error = true;
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h1>Halaman Login Admin</h1>
    <?php if($error == true){?>
        <p style = "color:red;"><i>anda salah memasukkan password!</i></p>
    <?php }?>
    
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">username:</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password:</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">submit</button>
            </li>
        </ul>
    </form>
</body>
</html>