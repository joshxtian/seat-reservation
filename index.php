<?php
require_once "./php/init.php";
require_once "/php/function.php";
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

<body>
  <header>
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
                <a class="nav-item nav-link navitem active navitem" href="#Home">Home</a>
                <a class="nav-item nav-link navitem" href="#">Movies</a>
                <a class="nav-item nav-link navitem" href="#">Contact Us</a>
                <a class="nav-item nav-link"><img src="./src/img/fb-icon.png" alt="fb icon" /></a>
              </div>
            </div>
          </nav>
          <div class="container">
            <div class="jumbotron jumbotron-fluid header-text">
              <div class="container">
                <h1 class="headermain" data-aos="fade-right" data-aos-duration="2000">
                  SM CINEMA
                </h1>
                <p class="header-p">Reserve seats and book tickets online</p>
                <a class="btn text-light btn-outline-primary" href="#" data-aos="fade-left" data-aos-duration="800">BOOK NOW</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="container my-5">
    <hr class="line mb-4" data-aos="fade-right" data-aos-duration="2000">
    <div class="d-flex justify-content-center">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active custom-nav-link" id="pills-nowShowing-tab" data-bs-toggle="pill" data-bs-target="#pills-nowShowing" type="button" role="tab" aria-controls="pills-nowShowing" aria-selected="true">
            Now Showing
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link custom-nav-link" id="pills-comingSoon-tab" data-bs-toggle="pill" data-bs-target="#pills-comingSoon" type="button" role="tab" aria-controls="pills-comingSoon" aria-selected="false">
            Coming Soon
          </button>
        </li>
      </ul>
    </div>


    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-nowShowing" role="tabpanel" aria-labelledby="pills-nowShowing-tab">
        <div class="container">
          <div class="row">
            <?php
              $view = new View;
              $view->viewMovies();
            ?>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-comingSoon" role="tabpanel" aria-labelledby="pills-comingSoon-tab">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-12">
              <div class="card card-shadow mx-auto my-3" style="width: 18rem" data-aos="fade-right" data-aos-duration="2000">
                <img src="./src/img/movie-1.jpg" class="card-img-top card-image-custom" alt="movie-1" />

                <div class="card-body">
                  <h5 class="card-title">Sangano, Sangano't, Sanggwapo</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    At quos deserunt consectetur omnis
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-end">
      <a href="./reserve.php" class="btn btn-primary btn-book">Reserve Now</a>
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
          <div class="container-fluid">
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