<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="copyright" content="MACode ID, https://macodeid.com" />

    <title>Robot Education</title>

    <link rel="stylesheet" href="{{asset('front-end/assets/vendor/animate/animate.css')}}" />

    <link rel="stylesheet" href="{{asset('front-end/assets/css/bootstrap.css')}}" />

    <link rel="stylesheet" href="{{asset('front-end/assets/css/maicons.css')}}" />

    <link
      rel="stylesheet"
      href="{{asset('front-end/assets/vendor/owl-carousel/css/owl.carousel.css')}}"
    />

    <link rel="stylesheet" href="{{asset('front-end/assets/css/theme.css')}}" />
  </head>
  <body>
    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
      <a href="/" class="navbar-brand w-50"
            ><img src="{{asset('front-end/assets/img/Capture.PNG')}}" alt="" class="w-25"
          /></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-lg-4 pt-3 pt-lg-0">
            <li class="nav-item">
              <a href="/" class="nav-link">Home</a>
            </li>
            <li class="nav-item ">
              <a href="/about" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="/program" class="nav-link">Programs</a>
              </li>
              <li class="nav-item active">
                <a href="/product" class="nav-link">Products</a>
              </li>
              <li class="nav-item">
                <a href="/portofolio" class="nav-link">Portofolio</a>
            <li class="nav-item ">
            <a href="/testimoni" class="nav-link">Testimonials</a>
            </li>
            <li class="nav-item">
              <a href="contact.html" class="nav-link">Contact</a>
            </li>
          </ul>

          <div class="ml-auto">
              <a href="#" class="btn btn-primary rounded-pill bg-danger"
                >Login</a
              >
            </div>
          </div>
        </div>
    </nav>

    <div class="container mt-5">
      <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Products</li>
              </ul>
            </nav>
            <h1 class="text-center">Our Products</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>
    <div class="page-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 py-3">
            <a href="/productdetail" class="text-dark" style="text-decoration:none">
            <div class="card-blog">
              <div class="header">
                    <img src="{{asset('front-end/assets/img/arduino.jpg')}}" alt="" class="w-75 mx-auto" style="border-radius:10px"/>
                </div>
                <div class="body">
                  <div class="post-title">Holder Arduino Uno - Frame Arduino Uno 3D Print
                  </div>
                </div>
                <div class="footer">
                  <div class="post-title">Rp. 10.000
                  </div>
              </div>
            </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 py-3">
          <a href="/productdetail" class="text-dark" style="text-decoration:none">
            <div class="card-blog">
              <div class="header">
                    <img src="{{asset('front-end/assets/img/casing.jpg')}}" alt="" class="w-75 mx-auto" style="border-radius:10px"/>
                </div>
                <div class="body">
                  <div class="post-title">Casing Sensor PIR / Chasing Box PIR Medium 3D Print
                  </div>
                </div>
                <div class="footer">
                  <div class="post-title">Rp. 13.000
                  </div>
              </div>
            </div>
          </a>
          </div>
          <div class="col-md-6 col-lg-4 py-3">
          <a href="/productdetail" class="text-dark" style="text-decoration:none">
            <div class="card-blog">
              <div class="header">
                    <img src="{{asset('front-end/assets/img/konveyor.jpg')}}" alt="" class="w-75 mx-auto" style="border-radius:10px"/>
                </div>
                <div class="body">
                  <div class="post-title">Konveyor Mini Arduino PLC
                  </div>
                </div>
                <div class="footer">
                  <div class="post-title">Rp. 1.500.000
                  </div>
              </div>
            </div>
          </a>  
          </div>



          <div class="col-12 mt-5">
            <nav aria-label="Page Navigation">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>

        </div>
  
      </div>
    </div>
  </main>
    <footer
      class="page-footer btn-primary"
      style="
        background-image: linear-gradient(
          359.1deg,
          rgba(0, 0, 0, 1) -5.6%,
          rgba(80, 85, 84, 1) 151.7%
        );
      "
    >
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-lg-4 py-4">
            <h5>Quick Links</h5>
            <ul class="footer-menu">
              <li><a href="#">Home</a></li>
              <li><a href="#">Programs</a></li>
              <li><a href="#">Portofolio</a></li>
            </ul>
          </div>
          <div class="col-lg-4 py-4">
            <h5>About Us</h5>
            <ul class="footer-menu">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Teams</a></li>
              <li><a href="#">Testimonials</a></li>
            </ul>
          </div>
          <div class="col-lg-4 py-4">
            <h5>Our Social Media</h5>

            <div class="sosmed-button mt-4">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
              <a href="#"><span class="mai-logo-linkedin"></span></a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 py-2">
            <p id="copyright">
              &copy; 2023 Mas <a href="https://macodeid.com/">Ubed</a>
            </p>
          </div>
          <div class="col-sm-6 py-2 text-right">
            <div class="d-inline-block px-3">
              <a href="#">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
      <!-- .container -->
    </footer>
    <!-- .page-footer -->

    <script src="{{asset('front-end/assets/js/jquery-3.5.1.min.js')}}"></script>

    <script src="{{asset('front-end/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('front-end/assets/vendor/wow/wow.min.js')}}"></script>

    <script src="{{asset('front-end/assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('front-end/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>

    <script src="{{asset('front-end/assets/vendor/animateNumber/jquery.animateNumber.min.js')}}"></script>

    <script src="{{asset('front-end/assets/js/google-maps.js')}}"></script>

    <script src="{{asset('front-end/assets/js/theme.js')}}"></script>
  </body>
</html>