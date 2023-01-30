<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.3.1/web-animations.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<script type="text/javascript" src="scripting/script.js"> </script>
<script src="jquery-1.9.1.min.js"></script>
<script src="assets/owl-carousel/owl.carousel.js"></script>
<script src="static/parallax/parallax.min.js"></script>
<script src="static/parallax/parallax.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/path/to/parallax.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link href="static/MBD/css/bootstrap.min.css" rel="stylesheet">
<link href="static/welcome/MBD/css/MBD.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- Custom styles -->
<link href="static/welcome/MBD/css/style.css ?v=<?php echo time(); ?>" rel="stylesheet">
<link rel="stylesheet" href="static/style/style.css">

<title>Welcome</title>

  </head>

  <body>
    <header>
      <nav>
        <p class="call"> <span>Call: </span>+49 07231 53 88 65</p>
        <p class="email"><span>Email:</span >medicronic@email.com</p>
        <div class="socials">
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-linkedin"></a>
          <a href="#" class="fa fa-youtube"></a>
          <a href="#" class="fa fa-instagram"></a>
        </div>
         <div class="login">
          <p><a href="#">Sign In </a>| <a href="#">sign Out</a></p>
         </div>

      </nav>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="static/images/logo.png" alt=""></a>

    <div class="collapse navbar-collapse" id="navbarScroll">
      <div class=" ulist">

      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
        </li>
      </ul>
    </div>

      <div class=" lower">
      <a
        class="link-secondary me-3 dropdown-toggle hidden-arrow"
        href="#"
        id="navbarDropdownMenuLink"
        role="button"
        data-mdb-toggle="dropdown"
        aria-expanded="false">
        <i class="fas fa-bell"></i>
        <span class="badge rounded-pill badge-notification bg-danger"></span>
      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
      <a href="#"><i class="fa fa-user"></i></span></a>
      <a class="open hide" id="open1">
      <span onclick="openNav()"><i class="fa-solid fa-bars"></i></span>
    </a>
      </div>
    </div>
      <span class="menI" onclick="openNav()"><i class="fa-solid fa-bars"></i></span>

  </div>

</nav>
</header>
<!-- Side navbar-->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="user-logo">
  <i class="fa fa-user" aria-hidden="true"></i>

  <p class="name"> </p>


  </div>
  <a href="#">Apointment</a>
  <a href="#">Create new</a>
  <a href="#">Patients</a>
  <a href="#">Manage</a>
  <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Menu
  </a>
    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
      <li><a class="dropdown-item" href="#">Home</a></li>
      <li><a class="dropdown-item" href="#">About</a></li>
      <li><hr class="dropdown-divider"> Services</li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
    </ul>

</div>

<!-- Side navbar ends -->

<!-- Carousel wrapper -->
<div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0"class="active"aria-current="true"
      aria-label="Slide 1"></button>
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>

  <!-- Inner -->
  <div class="carousel-inner">
    <!-- Single item -->
    <div class="carousel-item animated active">
      <img src="static/images/d2.jpg" class="d-block w-100" alt=""/>
      <div class="carousel-caption d-none d-md-block st">
        <h4 class="animated fadeInUp ">Prioritizing Your Health</h4>
        <h2 class="animated fadeInLeft">Your Health is Our Major Concern </h2>
        <p class="animated fadeInDown">Medicronic is designed to give your health a huge priority</p>
        <button type="button" class="btn btn-outline-light animated fadeInUp" data-mdb-ripple-color="dark">Get Started</button>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="static/images/d4.jpg" class="d-block w-100" alt=""/>
      <div class="carousel-caption d-none d-md-block animated nd">
        <h4 class="animated fadeInUp">You're in Good Hands</h4>
        <h2 class="animated fadeInUp"> Professional Doctors at one click </h2>
        <p class="animated fadeInDown">Connects you with experienced health specialists.</p>
        <button type="button" class="btn btn-outline-light animated fadeInUp" data-mdb-ripple-color="dark">Explore</button>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="static/images/d3.jpg" class="d-block w-100" alt=""/>
      <div class="carousel-caption d-none d-md-block animated rd">
        <h4 class="animated fadeInLeft">Keep in touch</h4>
        <h2 class="animated fadeInRight">Keep track of your Appointments</h2>
        <p class="animated fadeInDown">Monitors your health and Explore best services</p>
        <button type="button" class="btn btn-outline-light animated fadeInLeft" data-mdb-ripple-color="dark">Learn More</button>
      </div>
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel wrapper -->

<!-- Introduction starts -->
<section class="container-fluid">
  <div class="container">

<div class="Introduction">

 <div class="intro-wrapper">
    <div class="col">
      <div class="img-wrap">
      <img src="static/images/int2.jpg" alt="">
    </div>
  </div>
    <div class="col">
    <div class="card-body">
<h3 class="card-title">Welcome to Medicronic</h3>
<br>
<p class="card-text">This web-app is an intriguing platform that enables doctors and medical practitioners
   keeep in touch with their patients and manage their shedules. <br> It provides features that aids health workers keep create and
 track appointments with patients. These features include:</p>

    <ul class="pckg-outline">
      <li> <i class="fa-solid fa-check"></i> Anthroprometric assessment and vital statics calculation </li>
      <li><i class="fa-solid fa-check"></i> Dietry history evealuation</li>
      <li><i class="fa-solid fa-check"></i> Patients assesment</li>
      <li><i class="fa-solid fa-check"></i> Patient's pescription</li>
      <li><i class="fa-solid fa-check"></i> Vital Monitoring and Evealuation</li>
    </ul>
    <button type="button" class="btn btn-info">Learn More</button>
</div>
    </div>
 </div>
</div>
</div>


<!-- Introduction ends -->

<!-- Service starts -->

<div class="services">
  <div class="tittle">
    <h3> Major <span>Features</span></h3>
    <hr>  </hr>
  </div>

        <div class="column">
            <div class="card">
            <img src="static/images/s2.jpg" alt="Avatar" class="image" style="width:100%">
            <div class="middle">
                <div class="text">Virtual Consultation</div>
                <button type="button" class="btn" data-toggle="modal" data-target="#modalRegisterForm"> Sign up</button>
            </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
            <img src="static/images/s1.jpg" alt="Avatar" class="image" style="width:100%">
            <div class="middle">
                <div class="text">Surgery and Delivery Appointments </div>
                <button type="button" class="btn" data-toggle="modal" data-target="#modalRegisterForm"> Sign up</button>
            </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
            <img src="static/images/s3.jpg" alt="Avatar" class="image" style="width:100%">
            <div class="middle">
                <div class="text">Treatement monitoring</div>
                <button type="button" class="btn" data-toggle="modal" data-target="#modalLoginForm"> Sign up</button>
            </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

    <!-- Footer Elements -->
    <div class="container">

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-6 mb-4">

                <!-- Form -->
                <form class="form-inline">
                    <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
                           aria-label="Search">
                    <i class="fas fa-search" aria-hidden="true"></i>
                </form>
                <!-- Form -->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">

                <form class="input-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Your email"
                           aria-label="Your email" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-sm btn-outline-white my-0" type="button">Sign up</button>
                    </div>
                </form>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2023 Copyright:
        <a href="/"> Medicronic</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

</section>




</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
   integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</html>
