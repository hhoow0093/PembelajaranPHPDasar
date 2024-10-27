<?php
session_start();
if (isset($_SESSION["user"])) {
    $mysqli = require __DIR__ . "/database.php";
    $id = $_SESSION["user"];
    $query = "SELECT * FROM users WHERE id = $id";
    $result = $mysqli->query($query);
    $user = $result->fetch_assoc();
    // var_dump($user);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>
        .form-container {
            width: 300px;
            margin-inline: auto;
        }
    </style>
</head>

<body>
    <?php if (isset($_SESSION["user"])) { ?>
        <h1>Hello <?php echo  $user["name"];?></h1>
        <p>you are logged in</p>
        <a href="./logout.php">logout</a>
    <?php } else { ?>
        <h1>Home</h1>
        <p>You arent logeed in</p>
        <p><a href="./login.php">login</a> or <a href="./signup.html">sign up</a></p>
    <?php } ?>
</body>

</html>