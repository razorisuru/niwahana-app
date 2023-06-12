<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEND</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" media="screen">
    <link href="../css/login.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">

</head>

<body style="height: 100vh;">
    <?php

if(isset($_POST['reset'])) {
    $email = $_POST['email'];
}
else {
    exit();
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'niwahanlk@gmail.com';                     // SMTP username
    $mail->Password   = 'pwixjximnzskkvvi';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('niwahanlk@gmail.com', 'Admin');
    $mail->addAddress($email);     // Add a recipient

    $code = substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNM'),0,10);

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Password Reset';
    $mail->Body    = 'To reset your password click <a href="http://localhost/niwahana-app/mail/change_password.php?code='.$code.'">here </a>. </br>Reset your password in a day.';

    $conn = new mySqli('localhost', 'root', '', 'niwahana');

    if($conn->connect_error) {
        die('Could not connect to the database.');
    }

    $verifyQuery = $conn->query("SELECT * FROM login WHERE email = '$email'");

    if($verifyQuery->num_rows) {
        $codeQuery = $conn->query("UPDATE login SET code = '$code' WHERE email = '$email'");
            
        $mail->send();
        echo "<div class='h-100 d-flex align-items-center justify-content-center bgg'><div><p class='text-success p-3 fs-3 text-uppercase alert alert-success rounded-5 text-center'><br/>Message has been sent, check your emails.<br/><br/><a class='btn btn-primary' href='../login.php'><i class='bi bi-house-door-fill'></i> Go back</a><br/><br/></p></div></div>";
    }else {
    echo "<div class='h-100 d-flex align-items-center justify-content-center bgg'><div><p class='text-danger p-3 fs-3 text-uppercase alert alert-danger rounded-5 text-center'><br/>This Email Couldn't find in our database ! <br/><br/><a class='btn btn-primary' href='../login.php'><i class='bi bi-house-door-fill'></i> Go back</a><br/><br/></p></div></div>";
        $conn->close();
    }
    

} catch (Exception $e) {
    echo "<div class='h-100 d-flex align-items-center justify-content-center bgg'><div><p class='text-danger p-3 fs-3 text-uppercase alert alert-danger rounded-5 text-center'><br/>Message could not be sent. Mailer Error: {$mail->ErrorInfo}<br/><br/><a class='btn btn-primary' href='../login.php'><i class='bi bi-house-door-fill'></i> Go back</a><br/><br/></p></div></div>";
}    
?>

</body>

</html>