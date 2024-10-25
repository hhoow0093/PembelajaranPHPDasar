<?php
require "function.php";
if(!$_SESSION["login"]){
    header("Location: login.php");
    exit;
}

//ambil data dari url
$id = $_GET["id"];
// var_dump($id);

//query data mahasiswa berdasarkan id
$terpilih = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// var_dump($terpilih);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambah data ke database</title>
</head>

<body>
    <h1>Men-Update ke database mahasiswa</h1>
    <?php if (isset($_POST["submit"])) { ?>
            <?php
            if (update($_POST, $id) > 0) {
                echo
                "<script>
                    alert('mahasiswa telah diubah!');
                    document.location.href = 'index.php';
                </script>";
            } else {
                echo
                "<script>
                    alert('mahasiswa gagal diubah!');
                    document.location.href = 'index.php';
                </script>";
            }
            ?>

    <?php } ?>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nim">NIM:</label>
                <input type="text" name="nim" id="nim" value="<?php echo $terpilih['nim'];?>">
                <input type="hidden" name="gambarLama" value="<?php echo $terpilih['gambar'];?>"> 
            </li>
            <li>
                <label for="nama">nama:</label>
                <input type="text" name="nama" id="nama" value="<?php echo $terpilih['nama'];?>">
            </li>
            <li>
                <label for="email">email:</label>
                <input type="text" name="email" id="email" value="<?php echo $terpilih['email'];?>">
            </li>
            <li>
                <label for="jurusan">jurusan:</label>
                <input type="text" name="jurusan" id="jurusan" value="<?php echo $terpilih['jurusan'];?>">
            </li>
            <li>
                <label for="gambar">gambar:</label><br>
                <img src="./img/<?php echo $terpilih['gambar'];?>"><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <button type="submit" name="submit">ubah mahasiswa</button>
        </ul>
    </form>
</body>

</html>