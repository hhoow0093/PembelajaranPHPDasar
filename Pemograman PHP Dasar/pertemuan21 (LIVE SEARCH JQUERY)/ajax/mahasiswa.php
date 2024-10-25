<?php
usleep(500000);
require "../fileprojek/function.php";
$keyword = $_GET["keyword"];
$mahasiswa = search($keyword);
// var_dump($mahasiswa);
?>
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
    <?php foreach ($mahasiswa as $Mhs) { ?>
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