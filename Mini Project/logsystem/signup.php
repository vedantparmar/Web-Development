  <?php
  $showAlert = false; // Use camelCase for variable names
  $err = false;
  $showError = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partial/dbconnect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $email = $_POST["email"];

    // **Email Validation**
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $showError = "Invalid email format. Please enter a valid email address.";
      goto noInsert; // Jump to the end to avoid insertion if email is invalid
    }

    // **Security Improvement: Prepare statements to prevent SQL injection**
    $stmt = $conn->prepare("INSERT INTO `signup` (`username`, `email`, `password`) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password); // Bind parameters

    // Check for existing username
    $sql1 = "SELECT * FROM `signup` where username= ? OR email= ?";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->bind_param("ss", $username, $email); // Bind parameter
    $stmt1->execute();
    $stmt1->store_result();
    $nums = $stmt1->num_rows;

    if ($nums > 0) {
      $showError = "Username/Email Already Exists.";
    } else {
      if ($password == $cpassword) {
        // Insert user data if passwords match
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['cpassword'] = $cpassword;
        header('location: otp/index.php');
      } else {
        $showError = "Password and Confirm Password Should be same.";
      }
    }

    // Close prepared statements
    $stmt->close();
    $stmt1->close();

    noInsert: // Label to jump to if email validation fails
  }

    ?>
    <?php
    if ($showError) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Failed!</strong>' . $showError . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    ?>