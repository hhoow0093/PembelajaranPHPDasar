<?php
session_start();
if(isset($_SESSION["nama"])){
    echo $_SESSION["nama"];
} 
else{
    echo "sesinya udah habis yaa";
}
?>