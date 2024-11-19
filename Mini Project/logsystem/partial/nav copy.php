<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
        CoastalAir
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Stays</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
    <!-- Button trigger modal  signin-->
    <button type="button" class="btn btn-outline-secondary text-white" data-bs-toggle="modal" data-bs-target="#signin">Signin</button>

    <!-- Modal -->
    <div class="modal fade" id="signin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <h1 class="text-white">Login</h1>
            <form action="login.php" method="POST">
              <div class="mb-3">
                <label for="username" class="form-label text-white">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label text-white">Password</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <button type="submit" class="btn btn-primary text-white" name="login">Login</button>
            </form>
          </div>

        </div>
      </div>
    </div>
    <!-- Button trigger modal signup -->
    <button type="button" class="btn btn-outline-secondary mx-2 text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">Signup</button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <h1 class="text-white">SignUP</h1>
            <form action="signup.php" method="POST">
              <div class="mb-3">
                <label for="username" class="form-label text-white">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label text-white">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label text-white">Password</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <div class="mb-3">
                <label for="cpassword" class="form-label text-white">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
              </div>
              <button type="submit" class="btn btn-primary text-white" name="signup">signup</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>