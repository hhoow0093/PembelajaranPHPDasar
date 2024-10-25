<?php
require "function.php";
$id = $_GET["id"]; 
if(hapus($id) > 0){
    echo
    "<script>
        alert('mahasiswa telah dihapus!');
        document.location.href = 'index.php';
    </script>";
}
else{
    echo
    "<script>
        alert('mahasiswa gagal dihapus!');
        document.location.href = 'index.php';
    </script>";
}
?>