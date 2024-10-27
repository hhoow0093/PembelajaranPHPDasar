<?php
$email = $_POST["email"];
$token = bin2hex(random_bytes(16));

$token_hash = hash("sha256", $token);

//expiry token hanya berlaku 10 menit aja
$expiry = date("Y-m-d H:i:s", time() + 60 * 10);

$mysqli = require __DIR__ . "/database.php";
$sql = "UPDATE users 
SET reset_token_hash = ?,
reset_token_expires_at = ?
WHERE email = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("sss", $token_hash, $expiry, $email);
$stmt->execute();

if($mysqli->affected_rows){
    $mail = require __DIR__ . "/mailer.php";
    $mail->setFrom("noreply@example.com");
    $mail->addAddress($email);
    $mail->Subject = "Password Reset";
    $mail->Body = <<<END
    click <a href ="http://localhost/menyimpanfilephp/wpu-tutorial/Mencoba%20fitur%20forget%20password/02.%20Forget%20Password/reset-password.php?token=$token">here</a>
    to reset your password
    END;
    try{
        $mail->send();
    }catch(Exception $e){
        echo "message could not be sent. mailer error: {$mail->ErrorInfo}";
    }
}
echo "message been sent. check you mailbox now";
