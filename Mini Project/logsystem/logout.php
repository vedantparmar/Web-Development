<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('location: home1.php');
} else {
    session_destroy();
    session_unset();
    header('location: home1.php');
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
</body>

</html>