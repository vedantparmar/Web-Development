<?php


   $db_name = 'mysql:host=localhost;dbname=home_db';
   $db_user_name = 'root';
   $db_user_pass = '';

   $conn = new PDO($db_name, $db_user_name, $db_user_pass);

   function create_unique_id(){
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < 20; $i++) {
          $randomString .= $characters[mt_rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }

// if (!$conn) {
//   echo "The connection was not successfull" . mysqli_connect_error();
// } else {
//   echo "The Connection was Successfull";
// }

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
$otp = rand(100000, 999999);
if (isset($_COOKIE['email'])) {
  $mail = new PHPMailer();
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'dashinga828180@gmail.com';
  $mail->Password = 'keiihotcocshyhje';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;
  $mail->setFrom('dashinga828180@gmail.com', 'ABS');
  $mail->addAddress($_COOKIE['email']);
  $mail->isHTML(true);
  $mail->Subject = 'automated';
  $mail->Body = $otp;
  $mail->send();
  if ($mail->send()) {
    // echo "<br>Sent Successfully";
  } else {
    echo "error";
  }
}
$insert_otp = $conn->prepare("INSERT INTO `otptable` (`otp no.`, `exp`) VALUES (?,?)");
$insert_otp->execute([$otp, 0]); // Bind parameters for OTP and flag

?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>OTP Verification Form</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
   <script src="script.js" defer></script>
  </head>
  <body>
    <div class="container">
      <header>
        <i class="bx bxs-check-shield"></i>
      </header>
      <h4>Enter OTP Code</h4>
      <form method="POST" >
        <div class="input-field">
          <input type="number" name="f"/>
          <input type="number" name="s" disabled />
          <input type="number" name="t" disabled />
          <input type="number" name="fo" disabled />
          <input type="number" name="fi" disabled />
          <input type="number" name="si" disabled />
        </div>
        <button type="submit" name="submitotp">Verify OTP</button>
      </form>
    </div>
    <?php
  if (isset($_POST["submitotp"])) {
    $f=$_POST['f'];
    $s=$_POST['s'];
    $t=$_POST['t'];
    $fo=$_POST['fo'];
    $fi=$_POST['fi'];
    $si=$_POST['si'];
    $otps = $f.$s.$t.$fo.$fi.$si;

    $verify_otp = $conn->prepare("SELECT * FROM `otptable` WHERE `otp no.` = ? AND exp = ?;");
    $verify_otp->execute([$otps, 0]);
    
    $results= $verify_otp->rowCount();  
    if ($results) {
      echo "OTP Verified";
  
     $_COOKIE['otp']=true;
     // echo $_SESSION['username'];
     $sql = $conn->prepare("DELETE FROM `otptable` WHERE `otp no.` = ?");
    $sql->execute([$otps]);

     header('location: insert.php');
    } else {
    ?>
     <script>window.alert('Invalid OTP')</script>
     <?Php
    }
  }
  ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <script src="js/script.js"></script>
  </body>
</html>