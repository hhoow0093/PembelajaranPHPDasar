<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>
        .form-container {
            width: 300px;
            margin-inline: auto;
        }
    </style>
</head>

<body>
    <h1>Forgot pasword</h1>
    <form action="./send-password-reset.php" method="post">
        <label for="email">email</label>
        <input type="email" name="email" id="email">
        <button type="submit">Send</button>
    </form>

</body>

</html>