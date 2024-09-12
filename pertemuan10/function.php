<?php
$koneksi = mysqli_connect("localhost", "root", "", "phpdasar");
function query($perintah){
    global $koneksi;
    $data = [];
    $result = mysqli_query($koneksi, $perintah);
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
} 
?>