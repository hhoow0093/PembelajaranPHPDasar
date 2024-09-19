<?php
$koneksi = mysqli_connect("localhost", "root", "", "phpdasar");
function query($perintah)
{
    global $koneksi;
    $data = [];
    $result = mysqli_query($koneksi, $perintah);
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

function nambah($data)
{
    global $koneksi;
    // htmlspecialchars biar user tidak dapat memesukkan script html
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }


    $perintah = "INSERT INTO mahasiswa VALUES('', '$nama', '$nim', '$email', '$jurusan', '$gambar')";
    mysqli_query($koneksi, $perintah);
    return mysqli_affected_rows($koneksi);
}

function upload()
{
    // gak secure
    //$namaFile = $_FILES["gambar"]["name"];


    $ukuranFile = $_FILES["gambar"]["size"];
    $error = $_FILES["gambar"]["error"];
    $tempName = $_FILES["gambar"]["tmp_name"];

    //cek jika tidak ada gambar diupload
    if ($error === 4) {
        echo    "<script>
                alert('pilih gambar terlebih dahulu!');
                </script>";
        return false;
    }

    //ekstensi apakah file valid?
    $ekstensiFileValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode(".", $_FILES["gambar"]["name"]);
    $ekstensiGambar = strtolower(end($ekstensiGambar));


    if (!in_array($ekstensiGambar, $ekstensiFileValid)) {
        echo
        "<script>
        alert('anda salah memasukkan ekstensi file!');
        </script>";
        return false;
    }
    // ini lebih aman karena jika ada nama file yang sama dan berbeda foto, maka foto yang ditampilkan adalah foto yang sama
    $_FILES["gambar"]["name"] = uniqid() . ".$ekstensiGambar";
    $namaFile = $_FILES["gambar"]["name"];

    // lebih besar dari 1 MB
    if ($ukuranFile > 1000000) {
        echo
        "
        <script>
        alert('ukuran file terlalu besar');
        </script>
        ";
        return false;
    }

    $imgDirectory = 'D:/buatSimpanXampp/htdocs/menyimpanfilephp/wpu-tutorial/pertemuan14/fileprojek/img/';

    //lolos pengecekan, pengecekan, gambar siap di upload
    move_uploaded_file($tempName, $imgDirectory . $namaFile);
    return $namaFile;
}

function hapus($id)
{
    global $koneksi;
    $perintah = "DELETE FROM mahasiswa WHERE id = $id";
    mysqli_query($koneksi, $perintah);
    return mysqli_affected_rows($koneksi);
}

function update($data, $id)
{
    global $koneksi;
    // htmlspecialchars biar user tidak dapat memesukkan script html
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    if ($_FILES["gambar"]["error"] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
    $perintah = "UPDATE mahasiswa SET 
                nama = '$nama', 
                nim = '$nim',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
                WHERE id = $id
                ";
    mysqli_query($koneksi, $perintah);
    return mysqli_affected_rows($koneksi);
}

function search($kunci)
{
    $perintah = "SELECT * FROM mahasiswa WHERE
                nama LIKE '%$kunci%' OR
                nim LIKE '%$kunci%' OR
                email LIKE '%$kunci%' OR
                jurusan LIKE '%$kunci%'
                ";
    return query($perintah);
}

function registrasi($data)
{
    global $koneksi;

    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($koneksi, $data['password']);
    $konfirmasiPasword = mysqli_real_escape_string($koneksi, $data['konfirmasi-password']);

    //cek konfirmasi password
    if ($password !== $konfirmasiPasword) {
        echo    "
                    <script>
                        alert('salah konfirmasi password!');
                    </script>
                ";
        return false;
    }

    //cek jika usernamenya udah ada atau belum
    $result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo 
        "
        <script>
            alert('username sudah ada pada sistem!');
        </script>
        ";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // var_dump($password);
    // die;

    //masukkan ke dalam database
    $perintah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($koneksi, $perintah);
    return mysqli_affected_rows($koneksi);
}
