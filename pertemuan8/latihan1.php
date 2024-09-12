<?php
/*
// variabel scope
$x = 10;
function EchoHaha(){
echo $x;
}
// gak bakal kerja karena $x dalam function adalah local
EchoHaha();
*/

/*
$x = 10;
function EchoHaha(){
global $x;
echo $x;
}
// kerja karena $x dalam function adalah global
EchoHaha();
*/

// super global pada PHP (tipenya adalah array associative)
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV
?>