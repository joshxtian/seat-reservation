<?php
require_once "./php/init.php";
require_once "./php/function.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
  <link rel="stylesheet" href="./src/css/style.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <title>Seat Reservation</title>
</head>

<body class="reserve-body">
  <div id="Home">
    <div class="container-fluid navcon">
      <div class="container">
        <nav class="navbar navbar-expand-md navbar-dark pt-md-4 mb-5">
          <img src="./src/img/logo-header.png" class="logo" data-aos="fade-down" data-aos-duration="2000" />
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto color">
              <a class="nav-item nav-link navitem active navitem" href="/movie-reservation/index.php">Home</a>
              <a class="nav-item nav-link navitem" href="#">Movies</a>
              <a class="nav-item nav-link navitem" href="#">Contact Us</a>
              <a class="nav-item nav-link"><img src="./src/img/fb-icon.png" alt="fb icon" /></a>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>

  <section class="reserve-wrap">
    <div class="container">
      <div class="reserve-card d-flex align-items-center mx-auto">
        <div class="container d-flex align-items-center justify-content-center">
          <div class="row">
            <div class="col-lg-6 col-md-12 bg-dark screen-column">
              <h4 class="text-light">Seating Map</h4>
              <div class="seat-selection">

                <div class="d-flex flex-column screen-container">
                  <div class="screen">
                    <h5 class="fs-6 text-center text-light">Screen</h5>
                    <hr class="line mb-4 line-screen" />
                  </div>
                  <div class="d-flex flex-row w-75 flex-wrap seat-row bg-primary justify-content-center text-light mx-auto my-2">
                    <h6 class="text-center">Row 1</h6>
                  </div>
                  <div class="d-flex flex-row w-75 flex-wrap seat-row bg-danger justify-content-center text-light mx-auto my-2">
                    <h6 class="text-center">Row 2</h6>
                  </div>
                  <div class="d-flex flex-row w-75 flex-wrap seat-row bg-success justify-content-center text-light mx-auto my-2">
                    <h6 class="text-center">Row 3</h6>
                  </div>
                  <div class="d-flex flex-row w-75 flex-wrap seat-row bg-warning justify-content-center text-light mx-auto my-2">
                    <h6 class="text-center">Row 4</h6>
                  </div>



                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 p-5 information-column">
              <h4>Information</h4>

              <form action="" method="GET">
                <?php
                insertBooking();
                ?>
                <div class="mb-3">
                  <input type="email" placeholder="Email" class="form-control" name="emails" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <select class="form-select" name="branches" aria-label="Default select example">
                    <option selected>Branch</option>
                    <?php
                    $view = new View;
                    $view->viewBranchOption();
                    ?>
                  </select>
                </div>
                <div class="mb-3">
                  <select class="form-select" name="rows" aria-label="Default select example">
                    <option selected>Seating</option>
                    <option value="1">Row 1</option>
                    <option value="2">Row 2</option>
                    <option value="3">Row 3</option>
                    <option value="4">Row 4</option>
                  </select>
                </div>

                <div class="row">
                  <div class="col">
                    <select class="form-select" name="movies" aria-label="Default select example">
                      <option selected>Movie</option>
                      <?php
                      $view = new View;
                      $view->viewMovieOption();
                      ?>
                    </select>
                  </div>
                  <div class="col">
                    <select class="form-select" name="schedules" aria-label="Default select example">
                      <option selected>Schedule</option>
                      <?php
                      $view = new View;
                      $view->viewSchedOption();
                      ?>
                    </select>

                  </div>
                </div>
                <div class="mt-3">
                  <input type="number" name="quantities" placeholder="Quantity" min="1" max="16" value="1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <button type="submit" class="btn btn-primary my-3">Submit</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer text-light text-center">
    <div class="container footer-container">
      <div class="row">
        <div class="col">
          <h5 class="fs-3 text-start">Download Our App</h5>
          <p class="fs-6 text-start">
            Download App for Android and OS mobile phone
          </p>
          <div class="app-logo">
            <img src="./src/img/googleplay-icon.png" />
            <img src="./src/img/appleplay-icon.png" />
          </div>
        </div>
        <div class="col">
          <img class="footer-logo mb-3" src="./src/img/logo-footer.png" />
          <p class="fs-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum nihil
            ea.
          </p>
        </div>
        <div class="col">
          <div class="container">
            <div class="row">
              <div class="col">
                <h3 class="footer-link-header">Useful Links</h3>
                <ul class="footer-list">
                  <li class="footer-link">
                    <a href="#" class="footer-item">Coupons</a>
                  </li>
                  <li class="footer-link">
                    <a href="#" class="footer-item">Blog Posts</a>
                  </li>
                  <li class="footer-link">Return Policy</li>
                  <li class="footer-link">Join Affliate</li>
                </ul>
              </div>
              <div class="col">
                <h3 class="footer-link-header">Follow Us</h3>
                <ul class="footer-list">
                  <li class="footer-link">Facebook</li>
                  <li class="footer-link">Instagram</li>
                  <li class="footer-link">Twitter</li>
                  <li class="footer-link">Youtube</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="d-flex justify-content-end fixed-bottom py-5">
    <a href="/movie-reservation/admin.php" class="btn btn-info">Admin Panel</a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>