<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--libraries-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-jQaFWYHgO+AWnQ2/k8NwA/36sGkKj9F/91pM3rE3GO81jK3a6bBv6lWumFjyhU6pBc9acDuU6GZC6Yj2gjNKUg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--libraries-->
  <!--header logo-->
  <link rel="icon" type="image/png" href="assets/images/hytech842.png">

  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="offcanvas style.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">

  <style>
    .fa fa-bars {
      color: black;
    }
    .h-content{
      position: relative;
      overflow: hidden;
      height: 70px;
    }

    .image-overlay {
    position: relative;
}

.image-overlay::before {
    content: "";
    background: rgba(0, 0, 0, 0.5); /* Adjust the opacity (last value) to control darkness */
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 1; /* Ensure the overlay is on top of the image */
}
  </style>

</head>

<body style="background-color: #f7f7f7;">
  
<?php include("navAndOffcanvas.php");?>



      <!-- carousel started -->
      <!-- Carousel -->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
            aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active"
            aria-current="true"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item">
           <div class="image-overlay">
        <img class="w-100" src="https://cdn.educba.com/academy/wp-content/uploads/2023/03/C-Books.jpg" alt="" height="500">
    </div>

            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Example headline.</h1>
                <p>Some representative placeholder content for the first slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item active">
          <div class="image-overlay">
        <img class="w-100" src="https://preview.redd.it/11svlelylqm51.png?width=1080&crop=smart&auto=webp&s=52e71001e596dd24e13b52b2265ccfdb4a6cb4af" alt="" height="500">
    </div>
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Some representative placeholder content for the second slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
          <img class="w-100" src="https://ik.imagekit.io/panmac/tr:f-auto,w-740,pr-true//bcd02f72-b50c-0179-8b4b-5e44f5340bd4/f6a72868-7079-4551-92c6-480c6a0080d4/Best-sci-fi-books.jpg" alt=""  height="500">

            <div class="container">
              <div class="carousel-caption text-end">
                <h1>One more for good measure.</h1>
                <p>Some representative placeholder content for the third slide of this carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
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

  
<?php include("footer.html"); ?>
</body>
</html>