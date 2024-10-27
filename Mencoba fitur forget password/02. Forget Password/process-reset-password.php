<?php
$token = $_POST["token"];
$token_hash = hash("sha256", $token);

$mysqli = require __DIR__ . "/database.php";
$sql = "SELECT * FROM users WHERE reset_token_hash = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $token_hash);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if($user === null){
    die("token not found");
}
if(strtotime($user["reset_token_expires_at"]) <= time()){
    die("token is already expired");
}
// echo "token is valid and hasn't expired";

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


  $hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);

  $sql = "UPDATE users 
  SET password_hash = ?,
  reset_token_hash  = null,
  reset_token_expires_at = null
  WHERE id = ?";

  $stmt = $mysqli->prepare($sql);
  $stmt->bind_param("ss", $hashed_password, $user["id"]);
  $stmt->execute();
  echo "password has updated. try log in again";

?>