<?php
 // biar username tidak boleh kosong
 if(empty($_POST["username"])){
    die("please enter your username!");
 }

 //biar user enter email yang tepat
 if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    die("enter a valid email!");
 }

 // panjang password minimal 8 karakter
 if(strlen($_POST["password"]) < 8){
    die("password has to be at least 8 characters long");
 }

 // minimal harus ada satu kata alphabet kapital dan satu kata alphabet huruf kecil
 if(!preg_match('/[a-z]/', $_POST["password"]) || !preg_match('/[A-Z]/', $_POST["password"])){
    die("password must at least container a capital letter! and lower case letter!");
 }

 if($_POST["password"] !== $_POST["confirm-password"]){
    die("confirmation password incorrect!");
 }

 //hash password
 $hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
 
 //koneksikan dengan database lokal
 $mysqli = require __DIR__ . '/database.php';
 //masukkan data user ke dalam tabel users
 $query = "INSERT INTO users (name, email, password_hash) VALUES(?, ?, ?)";

// init untuk melakukan prepare dan execute
 $stmt = $mysqli->stmt_init();

//prepare statement
 try{
    $stmt->prepare($query);

}catch(mysqli_sql_exception $e){
    die("error:" . $e->getMessage() .  "errorCode:" . $e->getCode());
}
// Bind parameters
try {
    $stmt->bind_param("sss", $_POST["username"], $_POST["email"], $hashed_password);
} catch (mysqli_sql_exception $e) {
    die("error: " . $e->getMessage() . " errorCode: " . $e->getCode());
}
// execute statement
try{
    $stmt->execute();
    header("Location: signup-success.html");
    exit();
}catch(mysqli_sql_exception $e){
    if($e->getCode() === 1062){
        die("email has already been taken");
    }else{
        die("error:" . $e->getMessage() . "errorCode:" . $e->getCode());
    }
}

?>