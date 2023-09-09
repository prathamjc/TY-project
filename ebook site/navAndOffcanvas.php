<section> 
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="width: 100%;">

        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="assets/images/hytech842.png" alt="Avatar Logo" style="width:30px;" class="rounded-pill">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between" id="collapsibleNavbar">
            <div class="">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="registration form.php">Sign Up</a>
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
            </div>
            <div class="">
              <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Search" style="width: 300px;">
                <button class="btn btn-primary" type="button">Search</button>
              </form>
            </div>
          </div>
        </div>
      </nav>
  </section>
  
      <nav class="navbar navbar-expand-sm  py-0">
        <button type="button" class="btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop"
          aria-controls="offcanvasWithBackdrop"><i style="color:black;" class="fa fa-bars" aria-hidden="true"></i><b
            class="mx-2">All</b></button>
            <a class="nav-link" href="login form.php"><b class="mx-2">sign in <i class="fa fa-sign-in" aria-hidden="true"></i></b></a>
            <a class="nav-link" href="logout.php"><b class="mx-2">log out <i class="fa fa-sign-in" aria-hidden="true"></i></b></a>
            <a class="nav-link" href="cart page.php"><b class="mx-2">Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></b></a>
      </nav>

       <!--off canvas-->
  <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <!--off canvas-->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop"
      aria-labelledby="offcanvasWithBackdropLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">
          <a href="#">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i></a>

          <?php
        if (isset($_SESSION['username'])) {
          echo "Hello, " . $_SESSION['username'];
        } else {
          echo "Hello, Sign In";
        }
      ?>
        </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <p>......</p>
      </div>
    </div>
    <!--off canvas-->
  </form>
    <!--off canvas-->