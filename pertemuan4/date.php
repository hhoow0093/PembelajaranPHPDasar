<?php
// date
// echo date("l, d-M-Y");

//time
// menunjukkan waktu dalam detik dari 1 jaunari 1970
// echo time();

//menunjukkan hari ini, meskipun menggunakan fungsi time
// echo date("l", time()) . "<br>"; 

//memajukan hari sekarang ke 3 hari beikutnya
// echo date("l, d-M-Y", time() + 60 * 60 * 24 * 3);

//memundurkan hari dari sekarang ke 3 hari sebelumnya
// echo date("l, d-M-Y", time() - 60 * 60 * 24 * 3);

// mktime, membuat time detik tanggal - 1 januari 1970
// mktime(0,0,0,0,0,0);
// jam, menit, detik, bulan, tanggal, tahun

//fungsi untuk mengetahui hari lahir tanggal kita
// echo date("l, d-M-Y" , mktime(0,0,0,12,3,2005));

//strtotime, sama kayak mktime tapi inputnya dalam string
// echo date("l, d-M-Y", strtotime("3 december 2005"));
?>