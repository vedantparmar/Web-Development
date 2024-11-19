<?php
 session_start();
$_SESSION['temp'] = null;
$servername = "localhost";
$username = "root";
$password = "";
$database = "project";
$conn = mysqli_connect($servername, $username, $password, $database);
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
if (isset($_SESSION['email'])) {
  $mail = new PHPMailer();
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
    // echo "<br>Sent Successfully";
  } else {
    echo "error";
  }
}
$query = "INSERT INTO `otptable` (`otp no.`, `exp`) VALUES ('$otp', '0')";
$result = mysqli_query($conn, $query);
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
      <form method="POST" action="index.php">
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
    echo $otps;
    $sql = mysqli_query($conn, "SELECT * FROM `otptable` WHERE `otp no.` = $otps and exp=0;");
    $results = mysqli_num_rows($sql);
    if ($results) {
      echo "OTP Verified";
     include 'insert.php';
     header('location: /project/logsystem/home.php');
      // echo $_SESSION['username'];
      $sql = mysqli_query($conn, "UPDATE `otptable` SET `exp`= 1;");
    } else {
      echo "Error in verification";
    }
  }
  ?>
  </body>
</html>