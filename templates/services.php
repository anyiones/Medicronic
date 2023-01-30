<?php
$configFile = '../model/config.php';
include ('header.php');
include($configFile);
session_start();
date_default_timezone_set('Europe/Berlin');
$date = date('d-m-y h:i:s');
$showAlert = false;
$showError = false;
$exists=false;

if($_SERVER["REQUEST_METHOD"] == "POST") {
// username and password sent from form

$myusername = mysqli_real_escape_string($db,$_POST['username']);
$mypassword = mysqli_real_escape_string($db,$_POST['password']);

$sql = "SELECT id, firstname|''|lastname AS name FROM user WHERE username = '$myusername' and password = '$mypassword'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];

$count = mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count == 1) {
   session_register("myusername");
   $_SESSION['login_user'] = $myusername;

   header("location: welcome.php");

   while($row = $result->fetch_assoc()) {
     date_default_timezone_set('Europe/Berlin');
     $date = date('d-m-y h:i:s');
     $log_id=$row["id"];
     $sql_insert = 'INSERT INTO login (user_id, login_time,logout_time) VALUES ($log_id,$date, $date )';
}


}else {
   $showError = "Your Login Name or Password is invalid";
}
}
 ?>

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
