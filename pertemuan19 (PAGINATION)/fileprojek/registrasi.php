<?php
require "function.php";
if (isset($_POST['register'])) {
    if (registrasi($_POST) > 0) {
        echo    "
                <script>
                    alert('user baru sukses ditambahkan!');
                </script>
                ";
    } else {
        echo    "
                <script>
                    alert('user baru gagal ditambahkan!');
                </script>
                ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hlaman registrasi</title>
</head>
<style>
    ul {
        display: flex;
        flex-direction: column;
        width: 400px;
        padding: 10px;
        gap: 10px;
        margin: auto;
    }

    li {
        display: flex;
        justify-content: space-between;
    }
    
    h1{
        width: 400px;
        margin: auto;
    }
</style>

<body>
    <h1>Halaman Registrasi</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">username:</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password:</label>
                <input type="text" name="password" id="password">
            </li>
            <li>
                <label for="konfirmasi-password">konfirmasi Password:</label>
                <input type="text" name="konfirmasi-password" id="konfirmasi-password">
            </li>
            <li>
                <button type="submit" name="register">submit</button>
            </li>

        </ul>

    </form>

</body>

</html>