<?php
session_start();

// Check if the form has been submitted
if (isset($_POST['submit'])) {

  // Connect to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ebook site";

  // Create a connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check the connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Retrieve the form data
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  
  if($email=='bhushan@gmail.com' && $password=='admin' || $email=='rohit@gmail.com' && $password=='admin' ){
    header("Location: http://localhost/webtask/ADMIN DASHBORD.html"); 
}
  // Prepare the SQL statement
  $sql = "SELECT * FROM users WHERE email='$email'";

  // Execute the SQL statement
  $result = mysqli_query($conn, $sql);

  // Check if the user exists
  if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);

    // Verify the password
    if ($password == $user['password']) {
      // Set session variables
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['email'] = $user['email'];

      // Redirect to the home page
      header("Location: http://localhost/ebook site/index.php");
      exit;
    } else {
      echo "Error: Invalid password";
    }
  }
 
  else {
    echo "Error: User not found";
  }

  // Close the connection
  mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>log in form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  
<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" type="text/css" href="forms style.css">
  
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="assets/images/hytech842.png" alt="Avatar Logo" style="width:30px;" class="rounded-pill">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registration form.php">Sign up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Link</a></li>
            <li><a class="dropdown-item" href="#">Another link</a></li>
            <li><a class="dropdown-item" href="#">A third link</a></li>
          </ul>
        </li>
      </ul>
      <div class="mx-auto">
      <form class="d-flex">
        <input style="width:100%" class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
    </div>
  </div>
</nav>

    <div class="container mt-5">
    <div class="row">
      <div class="panel panel-primary">
        <div class="panel-body">
          <form method="POST" <?php $_SERVER['PHP_SELF']?>>
            <div class="border border-2 rounded p-3">
            <div class="form-group">
              <h2><center>Login</center></h2>
            </div>
            <div class="form-group">
              <label class="control-label" for="signupEmail">Email</label>
              <input id="signupEmail" type="email" maxlength="50" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label class="control-label" for="signupPassword">Password</label>
              <input id="signupPassword" type="password" maxlength="25" class="form-control" placeholder="at least 6 characters" length="40">
            </div>
            <div class="form-group">
              <div class="d-grid gap-2">
              <button id="signupSubmit" type="submit" class="btn btn-info btn-block"><span>Log in</span></button>
            </div>
          </div>
            </div>
            <hr>
            <p></p>Don't have an account? <a href="registration form.html">Sign up here</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>

<footer class="footer mt-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4">
        <h5>About Us</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, magna id ullamcorper dictum, augue velit tincidunt augue, eu gravida mauris velit id tellus.</p>
      </div>
      <div class="col-sm-4">
        <h5>Contact Us</h5>
        <ul>
          <li>Email: info@example.com</li>
          <li>Phone: 555-555-5555</li>
          <li>Address: 123 Main St, Anytown USA</li>
        </ul>
      </div>
      <div class="col-sm-4">
        <h5>Follow Us</h5>
        <div class="social-links">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center">Copyright &copy;2022 Your Company. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
