<?php
    $configFile = '../model/config.php';
    include ('header.php');
    include($configFile);
    session_start();

    $showAlert = false;
    $showError = false;
    $exists=false;


if(isset($_POST['register'])) {
   $fname = ($_POST["fname"]);
   $lname = ($_POST["lname"]);
   $email =  ($_POST["email"]);
   $occup= ($_POST['select1']);
   $desig= mysqli_real_escape_string($conn,$_POST['select2']);
   $password =($_POST['password']);
   $cpassword = ($_POST["cpassword"]);
   date_default_timezone_set('Europe/Berlin');
   $date = date('y-d-m h:i:s');

    $sql = "SELECT * FROM `user` WHERE username='$email'";

    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    // This sql query is use to check if
    // the username is already present
    // or not in our Database
    if($num == 0) {
        if(($password == $cpassword) && $exists==false) {

            $hash = password_hash($password,PASSWORD_DEFAULT);
            echo $desig;
            echo $fname;
            // Password Hashing is used here.
            $sql ="INSERT INTO `user`( firstname, surname, username, password, occup, designation, reg_time)
            VALUES ('".$fname."','".$lname."','".$email."','".$hash."','".$occup."','".$desig."','".$date."')";

            if (mysqli_query($conn, $sql)) {
                $showAlert = true;
                echo "Show result";
              }else {
                $showError = "Insert uncessesful";
              }
        }
        else {
            $showError = "Passwords do not match";
        }
    }// end if

   if($num>0)
   {
      $exists="Username already exist";
   }
}//end if


  ?>

  <title>login</title>
  </head>
  <body>
   <section class="container-fluid cover-area" style="background-image: url('../static/images/b1.jpg')">

     <?php
     if($showAlert) { ?>

       <div class="alert alert-success alert-dismissible fade show" role="alert">

            <strong> <?php echo "Success!"?></strong> <?php echo "Your account is
            now created and you can login.";?>
            <button type="button" class="close"
                data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div> <?php } ?>

   <?php
    if($showError) { ?>
       <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong><?php echo "Error! '. $showError.' "?></strong>

       <button type="button" class="close"
            data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
       </button>
     </div> <?php ; ?>
  <?php } ?>

  <?php  if($exists) { ?>
       <div class="alert alert-danger alert-dismissible fade show" role="alert">

        <strong><?php echo "Error! '. $exists.'"?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
       </div>
  <?php }?>
  <!-- Registeration Form -->

  <div class="d-flex align-items-center form-cont h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

    <form style="width: 23rem;">

      <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

      <div class="form-outline mb-4">
        <input type="email" id="username" name="username" class="form-control form-control-lg" />
        <label class="form-label" for="form2Example18">Email address</label>
      </div>

      <div class="form-outline mb-4">
        <input type="password" id="userpassword" name="userpassword" class="form-control form-control-lg" />
        <label class="form-label" for="form2Example28">Password</label>
      </div>

      <div class="pt-1 mb-4">
        <button class="btn btn-info btn-lg btn-block" type="submit" name="log">Login</button>
      </div>

      <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
      <p>Don't have an account? <a href="#!" class="link-info">Register here</a></p>

    </form>
   </div>

<div class=" d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5 form-cont-r">
        <form action="login.php" method="POST">
          <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register</h3>
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row">
            <div class="col-md-6 mb-4">
              <div class="form-outline">
                <input type="text" id="fname" name="fname" class="form-control" />
                <label class="form-label" for="form3Example1">First name</label>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="form-outline">
                <input type="text" id="lname" name="lname" class="form-control" />
                <label class="form-label" for="form3Example2">Last name</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-4">
              <select class="select" name="select1" id="select1" aria-label="size 3 select example">
              <option value="" disabled selected>Job category</option>
              <option value="Doctor">Doctor</option>
              <option value="Nurse">Nurse</option>
              <option value="General practitioner">General practitioner</option>
            </select>
            </div>

            <div class="col-md-6 mb-4">
            <select class="select" name="select2" id="select2">
                  <option value="" disabled selected >Designation</option>
                  <option value="One">One</option>
                  <option value="Two">Two</option>
                  <option value="Three">Three</option>
                  <option value="Four">Four</option>
            </select>
            </div>
          </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" id="email" name="email" class="form-control" />
          <label class="form-label" for="form3Example3">Email address</label>
        </div>

        <!-- Password input -->
    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="form-outline mb-4">
          <input type="password" name="password" id="password" class="form-control" />
          <label class="form-label" for="form3Example4">Password</label>
        </div>
        </div>

    <div class="col-md-6 mb-4">
      <div class="form-outline mb-4">
        <input type="password" name="cpassword" id="cpassword" class="form-control" />
        <label class="form-label" for="form3Example4">Password</label>
      </div>
      </div>

      </div>

        <!-- Checkbox -->
        <div class="form-check d-flex justify-content-center mb-4">
          <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
          <label class="form-check-label" for="form2Example33">
            I'm not a Robot
          </label>
        </div>

        <!-- Submit button -->
        <button type="submit" name="register" class="btn btn-primary btn-block mb-4">
          Sign up
        </button>

        <!-- Register buttons -->
        <div class="text-center">
          <p>or Create an account with:</p>
          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
          </button>

          <button type="submit" name="sign" id="sign" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
          </button>
        </div>
      </form>
    </div>
</section>
  <?php
  include ('footer.php');
  ?>
