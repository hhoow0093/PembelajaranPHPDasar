<?php
require "./function.php";

if (isset($_POST["login"])) {
    if (login($_POST) === 1) {
        header("Location: ./index.php");
        exit;
    } else if (login($_POST) === 0) {
        echo
        "
        <script>
            alert('anda salah memasukkan password');
        </script>
        ";
    } else if( login($_POST) === -1){
        echo
        "
        <script>
            alert('username yang anda ketik tidak ada dalam sistem');
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
    <title>Halaman login</title>
</head>

<body>
    <h1>Halaman LOGIN</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </li>
            <li>
                <label for="password">Username:</label>
                <input type="password" id="password" name="password" required>
            </li>
            <li>
                <input type="submit" name="login">
            </li>
        </ul>
    </form>
</body>

</html>