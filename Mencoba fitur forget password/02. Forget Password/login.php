<?php
$isInvalid = false;
if($_SERVER["REQUEST_METHOD"]  === "POST"){
$mysqli = require __DIR__ . "/database.php";
$email = mysqli_escape_string($mysqli, $_POST["email"]);
$query = "SELECT * FROM users WHERE email = '$email'";

$result = $mysqli->query($query);
$user = $result->fetch_assoc();
if($user){
    if(password_verify($_POST["password"], $user["password_hash"])){
        session_start();
        $_SESSION["user"] = $user["id"];
        header("Location: index.php");
        exit();
    }
}
$isInvalid = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<style>
    .form-container {
        width: 300px;
        margin-inline: auto;
    }
</style>

<body>
    <h1>Login Page</h1>
    <?php if($isInvalid){?>
        <em>invalid login</em>
        <?php }?>
    <form action="" method="post">
        <div>
            <label for="email">email</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email ?? '');?>">
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" id="password" name="password">
        </div>
        <button type="submit">login</button>
    </form>
    <a href="./forgot-password.php">forgot password?</a>
</body>

</html>