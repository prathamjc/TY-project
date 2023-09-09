<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>registration form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  
<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" type="text/css" href="forms style.css">
<link rel="stylesheet" type="text/css" href="offcanvas.css">
  
</head>
<body>
 <?php include 'navAndOffcanvas.php'; ?>

    <div class="container mt-3">
    <div class="row">
      <div class="panel panel-primary">
        <div class="panel-body">
          <form method="POST" action="register.php">
            <div class="border border-2 rounded p-3">
            <div class="form-group">
              <h2>Create account</h2>
            </div>
            <div class="form-group">
              <label class="control-label" for="signupName">Your name</label>
              <input name="uname" id="signupName" type="text" maxlength="50" class="form-control" placeholder="Your name">
            </div>
            <div class="form-group">
              <label class="control-label" for="signupEmail">Email</label>
              <input name="email" id="signupEmail" type="email" maxlength="50" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label class="control-label" for="signupPassword">Password</label>
              <input name="pass" id="signupPassword" type="password" maxlength="25" class="form-control" placeholder="at least 6 characters" length="40">
            </div>
            <div class="form-group">
              <label class="control-label" for="signupPasswordagain">Password again</label>
              <input name="cpass" id="signupPasswordagain" type="password" maxlength="25" class="form-control" placeholder="Enter Password again">
            </div>
            <div class="form-group">
              <div class="d-grid gap-2">
              <button name="submit" id="signupSubmit" type="submit" class="btn btn-info btn-block"><span>Create your account</span></button>
            </div>
            </div>
            <p class="form-group">By creating an account, you agree to our <a href="#">Terms of Use</a> and our <a href="#">Privacy Policy</a>.</p>
            <hr>
            <p></p>Already have an account? <a href="login form.html">Sign in</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php include("footer.html"); ?>
</body>
</html>
