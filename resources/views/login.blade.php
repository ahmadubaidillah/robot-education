<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Yinka Enoch Adedokun">
	<title>Robot Education</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('login.css')}}">

</head>
<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100 w-75">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
              <div class="card-body p-md-5 mx-md-4 ">

                <div class="text-center">
                  <img src="{{asset('front-end/assets/img/logo.png')}}"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 mt-4 pb-1">Robot Education Team</h4>
                </div>

                <form>
                  <!-- <p>Please login to your account</p> -->

                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example11" class="form-control"
                     />
                    <label class="form-label" for="form2Example11">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control" />
                    <label class="form-label" for="form2Example22">Password</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 w-50" type="button">Log
                      in</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-2"></div>

          </div>
      </div>
    </div>
  </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>