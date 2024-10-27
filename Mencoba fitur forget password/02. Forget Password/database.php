<?php
$koneksiDB = new mysqli(
    hostname: "localhost",
    username: "root",
    password: "",
    database: "sistem_login"
);

if($koneksiDB->connect_errno){
    die("connection error:" . $koneksiDB->connect_error);
}

return $koneksiDB;
