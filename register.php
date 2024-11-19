<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_POST['submit'])){

   $id = create_unique_id();
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING); 
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING); 
   $c_pass = sha1($_POST['c_pass']);
   $c_pass = filter_var($c_pass, FILTER_SANITIZE_STRING); 
   $expire = time() + 60 * 60 * 24 * 30; 
$path = "/";

setcookie("email", $email, $expire, $path);
setcookie("number", $number, $expire, $path);
setcookie("name", $name, $expire, $path);
setcookie("id", $id, $expire, $path);
setcookie("c_pass", $c_pass, $expire, $path);

   $select_users = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
   $select_users->execute([$email]);
   if (empty($name) || !preg_match("/^[a-zA-Z\s]*$/", $name)) {
      $warning_msg[] = 'Enter Valid Name!';
    } else {
         if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $warning_msg[] = 'Enter Valid Email!';
         }
         else{
            if (empty($number) || strlen($number) != 10 || !preg_match("/^[0-9\s]*$/", $number)) {
               $warning_msg[] = 'Enter Valid Mobile.No.!';
           }
           else{
            $id = create_unique_id();
            $name = $_POST['name'];
            $name = filter_var($name, FILTER_SANITIZE_STRING); 
            $number = $_POST['number'];
            $number = filter_var($number, FILTER_SANITIZE_STRING);
            $email = $_POST['email'];
            $email = filter_var($email, FILTER_SANITIZE_STRING);
            $pass = sha1($_POST['pass']);
            $pass = filter_var($pass, FILTER_SANITIZE_STRING); 
            $c_pass = sha1($_POST['c_pass']);
            $c_pass = filter_var($c_pass, FILTER_SANITIZE_STRING); 
            $expire = time() + 60 * 60 * 24 * 30; 
         $path = "/";
         
         setcookie("email", $email, $expire, $path);
         setcookie("number", $number, $expire, $path);
         setcookie("name", $name, $expire, $path);
         setcookie("id", $id, $expire, $path);
         setcookie("c_pass", $c_pass, $expire, $path);
         
            $select_users = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
            $select_users->execute([$email]);
              if($select_users->rowCount() > 0){
                 $warning_msg[] = 'email already taken!';
              }else{
                 if($pass != $c_pass){
                    $warning_msg[] = 'Password not matched!';
                 }else{
                    header('location: otp/index.php');
                 }
                    
                 }
           }
   
         }
      }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>



<section class="form-container">

   <form action="" method="post">
      <h3>create an account!</h3>
      <input type="tel" name="name" required maxlength="50" placeholder="enter your name" class="box">
      <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
      <input type="number" name="number" required min="0" max="9999999999" maxlength="10" placeholder="enter your number" class="box">
      <input type="password" name="pass" required maxlength="20" placeholder="enter your password" class="box">
      <input type="password" name="c_pass" required maxlength="20" placeholder="confirm your password" class="box">
      <p>already have an account? <a href="login.html">login now</a></p>
      <input type="submit" value="register now" name="submit" class="btn">
   </form>

</section>












<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>


<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

</body>
</html>