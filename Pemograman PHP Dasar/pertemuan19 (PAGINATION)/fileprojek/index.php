<?php
require "function.php";
if(!$_SESSION["login"]){
    header("Location: login.php");
    exit;
}

//membuat pagination (query LIMIT untuk menampilkan battas data)
// LIMIT index ke berapa, berapa data yang akan ditunjukkan
$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData /$jumlahDataPerHalaman);

$halamanAktif = (isset($_GET["halaman"]) ? $_GET["halaman"] : 1);
$indexBenar = $jumlahDataPerHalaman * ($halamanAktif - 1);

$arrMhs = query("SELECT * FROM mahasiswa LIMIT $indexBenar, $jumlahDataPerHalaman"); 


if(isset($_POST["cari"])){
    $arrMhs = search($_POST["key"]);
}
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
        <a href="./nambah.php">tambah data mahasiswa</a>|
        <a href="./registrasi.php">registrasi user</a>|
        <a href="./logout.php">log out</a>|
    </div>

    <div style="text-align:center; margin:20px 0px;">
    <form action="" method="post">
        <input type="text" name= "key" placeholder="ketikkan apapun.." autocomplete="off" autofocus size="30">
        <button type="submit" name="cari" >Cari!</button>
    </form>
    <!-- pagination -->
    <?php if($halamanAktif != 1){?>
        <a href="./index.php?halaman=<?php echo $halamanAktif - 1;?>">&lt;</a>
    <?php }?>
     
    <?php for($i = 1; $i <= $jumlahHalaman; $i++){?>
        <?php if($i == $halamanAktif){?>
            <b><a href="./index.php?halaman=<?php echo  $i;?>"><?php echo $i;?></a></b>
        <?php }else{?>
            <a href="./index.php?halaman=<?php echo  $i;?>"><?php echo $i;?></a>
        <?php }?>
        
    <?php }?>

    <?php if($halamanAktif != $jumlahHalaman){?>
        <a href="./index.php?halaman=<?php echo $halamanAktif + 1;?>">&gt;</a>
    <?php }?>

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
                    <a href="./update.php?id=<?php echo $Mhs["id"]; ?>">ubah</a> |
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