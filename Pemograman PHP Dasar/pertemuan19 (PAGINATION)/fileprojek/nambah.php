<?php
require "function.php";
if(!$_SESSION["login"]){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambah data ke database</title>
</head>

<body>
    <h1>Menambahkan ke database mahasiswa</h1>
    <?php if (isset($_POST["submit"])) { ?>
        <?php if (empty($_POST["nim"]) || empty($_POST["nama"]) || empty($_POST["email"]) || empty($_POST["jurusan"])) { ?>
            <h2 style="color: red;"><b><i>Masukkan data yang lengkap!</i></b></h2>
        <?php } else { ?>
            <?php
            if (nambah($_POST) > 0) {
                echo
                "<script>
                    alert('mahasiswa telah ditambahkan!');
                    document.location.href = 'index.php';
                </script>";
            } else {
                echo
                "<script>
                    alert('mahasiswa gagal ditambahkan!');
                    document.location.href = 'index.php';
                </script>";
            }
            ?>

        <?php } ?>
    <?php } ?>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nim">NIM:</label>
                <input type="text" name="nim" id="nim">
            </li>
            <li>
                <label for="nama">nama:</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">email:</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">jurusan:</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">gambar:</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <button type="submit" name="submit">tambahkan mahasiswa</button>
        </ul>
    </form>
</body>

</html>