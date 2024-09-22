<?php
require "function.php";
$arrMhs = query("SELECT * FROM mahasiswa");
// var_dump($arrMhs);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        table {
            margin: auto;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>daftar mahasiswa</h1>
    <div style="text-align:center; margin:20px 0px;">
        <a href="./nambah.php">tambah data mahasiswa</a>
    </div>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>nama</th>
            <th>email</th>
            <th>Jurusan</th>
        </tr>
        <?php $counter = 1; ?>
        <?php foreach ($arrMhs as $Mhs) { ?>
            <tr>
                <td><?php echo $counter;
                    $counter++; ?></td>
                <td>
                    <a href="">ubah</a> |
                    <a href="./hapus.php?id=<?php echo $Mhs["id"]; ?>" onclick="return confirm('serius?');">hapus</a>
                </td>
                <td><img src="./img/<?php echo $Mhs["gambar"] ?>" alt="<?php echo $Mhs["gambar"] ?>" height="100" width="100"></td>
                <td><?php echo $Mhs["nim"] ?></td>
                <td><?php echo $Mhs["nama"] ?></td>
                <td><?php echo $Mhs["email"] ?></td>
                <td><?php echo $Mhs["jurusan"] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>