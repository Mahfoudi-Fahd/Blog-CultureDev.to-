<?php
require '../controllers/functions.php';

$register= new Register();

if(isset($_POST["submit"])){
  $result = $register->registration($_POST["username"],$_POST["email"],$_POST["password"],$_POST["confirm"]);
  if($result == 1){
    echo "success";
  }
  elseif($result == 10){

    echo
    "<script> alert('Alrady taken'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('passwords does not match'); </script>";
  }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>signup</title>
</head>
<body>
<div class="d-flex">
    <section class="welcome ">
        <h1 class="d-flex justify-content-center">Welcome Back !</h1>
        <p>To keep connected with us please login with your personal info</p>
        <a href="signin.php" class="btn btn-primary d-flex justify-content-center">Signin</a>
        </section>
    <section class="container form col-md-4">
        <form method="POST" action="">
            <div class="mb-3">
                <label for="User" class="form-label">Username</label>
                <input name="username" class="form-control" oninput="validateUsername()" id="User" >
                <div id="username-error" class="text-danger"></div>
              </div>
            <div class="mb-3">
              <label for="Email" class="form-label">Email address</label>
              <input type="" name="email" class="form-control" oninput="validateEmail()" id="Email" >
              <div id="email-error" class="text-danger"></div>
            </div>
            <div class="mb-3">
              <label for="Password" class="form-label" >Password</label>
              <input type="password" name="password" class="form-control" id="Password" oninput="validatePassword()" required>
              <div id="password-error"></div>
            </div>
            <div class="mb-3">
              <label for="ConfirmPassword" class="form-label">Confirm Password</label>
              <input type="password" name="confirm" class="form-control" id="ConfirmPassword" required>
            </div>

            <div class="d-flex justify-content-center">

                <button type="submit" name="submit" id="signup"  class="btn btn-primary">Register</button>
                </div>       
          </form>
    </section>
</div>


<!-- FORM VALIDATION -->
<script>
function validateUsername() {
    if (document.getElementById('User').value == '' || !/^[a-zA-Z]{5,}$/.test(document.getElementById('User').value)) {
        document.getElementById('User').setAttribute('style', 'color:red; border: 1px red solid ;');
  
        document.getElementById('username-error').innerText = 'Please enter a valid Username! check that the Name contains at least 5 characters and without special characters!!';
        document.getElementById('username-error').setAttribute('style', 'color:red;font-size:13px;');
        // document.getElementById("signup").disabled = true;
    } else {
        document.getElementById('User').setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
        document.getElementById('username-error').innerText = '';
        // document.getElementById("signup").disabled = false;
    }
}
function validateEmail() {
    if (document.getElementById('Email').value == '' || !/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/
.test(document.getElementById('Email').value)) {
        document.getElementById('Email').setAttribute('style', 'color:red; border: 1px red solid ;');
  
        document.getElementById('email-error').innerText = 'Please enter a valid Email!';
        document.getElementById('email-error').setAttribute('style', 'color:red;font-size:13px;');
        
    } else {
        document.getElementById('Email').setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
        document.getElementById('email-error').innerText = '';
     
    }
}
function validatePassword() {
    if (document.getElementById('Password').value == '' || !/^(?=.*[A-Z])(?=.*[!@#$%^&*])(?=.*[0-9])(?=.*[a-z]).{8,}$/
    .test(document.getElementById('Password').value)) {

      document.getElementById('Password').setAttribute('style', 'color:red; border: 1px red solid ;');
        document.getElementById('password-error').innerText = 'Please enter a valid Password!  At least one uppercase letter At least one special character , At least one number , At least one lowercase , letter Minimum length of 8 characters ';
        document.getElementById('password-error').setAttribute('style', 'color:red;font-size:13px;');
        // document.getElementById("save").disabled = true;
        // document.getElementById("update").disabled = true;
    } else {
        document.getElementById('Password').setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
        document.getElementById('password-error').innerText = '';
        // document.getElementById("save").disabled = false;
        // document.getElementById("update").disabled = false;
    }
}
</script>
</body>
</html>