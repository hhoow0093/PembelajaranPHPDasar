// ambil element yang kita membutuhkan
let keyword = document.getElementById("keyword");
let tombolCari = document.getElementById("tombol-cari");
let container = document.getElementById("container");

//tambahkan event ketika keyword ditulis
keyword.addEventListener("keyup", function() {
    
    //buat objek ajax
    var xhr = new XMLHttpRequest();

    //cek kesipan ajax
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            //jika ajax berhasil maka akan ambil text dari coba.txt
            container.innerHTML = xhr.responseText;
        }
    }

    //eksekusi ajax
    xhr.open("GET", `../ajax/mahasiswa.php?keyword=${keyword.value}`, true);
    xhr.send();
});
