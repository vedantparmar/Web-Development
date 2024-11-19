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


  $user_id = isset($_COOKIE['id']) ? $_COOKIE['id'] : null;
  $user_name = isset($_COOKIE['name']) ? $_COOKIE['name'] : null;
  $user_number = isset($_COOKIE['number']) ? $_COOKIE['number'] : null;
  $user_email = isset($_COOKIE['email']) ? $_COOKIE['email'] : null;
  $user_password = isset($_COOKIE['c_pass']) ? $_COOKIE['c_pass'] : null;
  $insert_user = $conn->prepare("INSERT INTO `users`(id, name, number, email, password) VALUES(?,?,?,?,?)");
  $insert_user->execute([ $user_id,$user_name, $user_number, $user_email, $user_password]);

// if ($insert_user) {
//   $verify_users = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ? LIMIT 1");
//   $verify_users->execute([$user_email,$user_password]);
//   $row = $verify_users->fetch(PDO::FETCH_ASSOC);

//   if ($verify_users->rowCount() > 0) {
    setcookie('user_id', $row['id'], time() + 60 * 60 * 24 * 30, '/');
    
    header('location:/project/home.php');
  // } else {
  //   $error_msg[] = 'something went wrong!';
  // }
?>
