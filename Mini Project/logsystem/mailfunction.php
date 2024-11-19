<?php
session_start();
$_SESSION['temp'] = false;
$servername = "localhost";
$username = "root";
$password = "";
$database = "project";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
  echo "The connection was not successfull" . mysqli_connect_error();
} else {
  echo "The Connection was Successfull";
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_SESSION['email'])) {


  $mail = new PHPMailer();
  $otp = rand(100000, 999999);
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'dashinga828180@gmail.com';
  $mail->Password = 'keiihotcocshyhje';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;
  $mail->setFrom('dashinga828180@gmail.com', 'ABS');
  $mail->addAddress($_SESSION['email']);
  $mail->isHTML(true);
  $mail->Subject = 'automated';
  $mail->Body = $otp;
  $mail->send();
  if ($mail->send()) {
    echo "<br>Sent Successfully";
  } else {
    echo "error";
  }
}
$query = "INSERT INTO `otptable` (`otp no.`, `exp`) VALUES ('$otp', '0')";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="POST" action="mailfunction.php">
    otp <input type="number" name="otp">
    <button type="submit" name="submitotp">enter otp</button>
  </form>
  <?php
  if (isset($_POST["submitotp"])) {
    $otps = $_POST["otp"];
    $sql = mysqli_query($conn, "SELECT * FROM `otptable` WHERE `otp no.` = $otps and exp=0;");
    $results = mysqli_num_rows($sql);
    if ($results) {
      echo "OTP Verified";
      $_SESSION['temp'] = true;
      header('location: home.php');
      $sql = mysqli_query($conn, "UPDATE `otptable` SET `exp`= 1;");
    } else {
      echo "Error in verification";
    }
  }
  ?>
</body>

</html>