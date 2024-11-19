<?php
session_start();

include 'dbconnect.php';

$username = $_SESSION['username'];
$password = $_SESSION['password'];
$cpassword = $_SESSION['cpassword'];
$email = $_SESSION['email'];

// Your existing code for email validation and prepared$_SESSIONments goes here

if ($password == $cpassword) {
  $stmt = $conn->prepare("INSERT INTO `signup` (`username`, `email`, `password`) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $username, $email, $password);
  
  // Execute the prepared statement to insert user data into the database
  $stmt->execute();
  
  // Close prepared statements and any other necessary cleanup
  
  // Redirect to a success page or perform any other actions after successful insertion
  $_SESSION["loggedin"]=true;
}
?>
