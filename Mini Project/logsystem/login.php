<?php
$login = false;
$err = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'partial/dbconnect.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  // **Security Improvement: Prepare statements to prevent SQL injection**
  $stmt = $conn->prepare("SELECT * FROM `signup` WHERE username = ? AND password= ?");
  $stmt->bind_param("ss", $username, $password); // Bind parameter
  $stmt->execute();
  $result = $stmt->get_result(); // Get the result

  if ($result->num_rows == 1) {
    $login = true;
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['loggedin'] = true;
    header("location: home1.php");
  } else {
    $err = true; // Username not found or multiple entries (unlikely)
  }

  // Close prepared statement
  $stmt->close();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  require 'partial/nav.php';
  ?>
  <?php
  if ($err) {
    // echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //   <strong>Failed!</strong> Invalid Credentials.
    //   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    //     <span aria-hidden="true">&times;</span>
    //   </button>
    // </div>';
    ?>
    <script>
      window.alert("Invalid Credentials!");
      </script>
  <?php
  }
  ?>

  <!-- <div class="container">
    <h1>Login</h1>
    <form action="login.php" method="POST">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div> -->
</body>

</html>