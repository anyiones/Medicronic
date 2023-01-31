<?php
include ('header.php');
 ?>

    <title>About</title>
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
          <p><a href="#">Sign In </a>| <a href="login.php">sign Out</a></p>
         </div>

      </nav>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home"><img src="static/images/logo.png" alt=""></a>

    <div class="collapse navbar-collapse" id="navbarScroll">
      <div class=" ulist">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
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
  <a href="">Apointment</a>
  <a href="#">Create new</a>
  <a href="#">Patients</a>
  <a href="#">Manage</a>
  <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Menu
  </a>
    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
      <li><a class="dropdown-item" href="">Home</a></li>
      <li><a class="dropdown-item" href="#">About</a></li>
      <li><hr class="dropdown-divider">Services</li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
    </ul>

</div>

<div class="parallax-window " data-parallax="scroll" data-image-src="">
 <div class="text">
 <h3>About US</h3>
 <p> <span><a href="#">Home</a></span>/ About </p>
 </div>
</div>

<div class="container-fluid">
  <div class="container">

<div class="Introduction">

 <div class="intro-wrapper">
  <div class="col into-col">
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
  <div class="col abt-col">
      <div class="img-wrap">
      <img src="../static/images/int2.jpg" alt="">
    </div>
  </div>
 </div>
</div>
</div>

<div class="container">
<div class="intro-nvb">
  <div class="tittle">
    <h3><span>Features</span> in few steps</h3>
    <hr>  </hr>
  </div>

  <div class="step-imgs">
  <div class="row-card">
    <img src="../static/images/col1" alt="Avatar" class="image" style="width:100%">
    <div class="middle">
     <div class="text"> <h4>Get Started</h4></div>
     <button type="button" class="btn" data-toggle="modal" data-target="#"> Register</button>
    </div>
  </div>
  </div>

 <div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Appointments Management
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        Therapy and Surgery Scheduling
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        Patient & Treatement Monitoring
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

<?php
include ('footer.php');
?>
