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

function nambah($data){
    global $koneksi;
    // htmlspecialchars biar user tidak dapat memesukkan script html
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $perintah = "INSERT INTO mahasiswa VALUES('', '$nama', '$nim', '$email', '$jurusan', '$gambar')";
    mysqli_query($koneksi, $perintah);
    return mysqli_affected_rows($koneksi);
}

function hapus($id){
    global $koneksi;
    $perintah = "DELETE FROM mahasiswa WHERE id = $id";
    mysqli_query($koneksi, $perintah);
    return mysqli_affected_rows($koneksi);
}
?>