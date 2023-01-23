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
        <form method="POST" action="" onsubmit="return validateForm(event)">
            <div class="mb-3">
                <label for="User" class="form-label">Username</label>
                <input name="username" class="form-control" id="User" >
                <div id="username-error" class="text-danger"></div>
              </div>
            <div class="mb-3">
              <label for="Email" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="Email" >
              <div id="email-error" class="text-danger"></div>
            </div>
            <div class="mb-3">
              <label for="Password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="Password">
            </div>
            <div class="mb-3">
              <label for="ConfirmPassword" class="form-label">Confirm Password</label>
              <input type="password" name="confirm" class="form-control" id="ConfirmPassword">
            </div>

            <div class="d-flex justify-content-center">

                <button type="submit" name="submit"  class="btn btn-primary">Register</button>
                </div>       
          </form>
    </section>
</div>
<script>
function validateForm(e) {
    var username = document.getElementById("User").value;
    var email = document.getElementById("Email").value;
    var mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;




    if (username == "") {
      e.preventDefault();
        // alert("Name must be filled out");
        document.getElementById("User").style.borderColor = "red";
        document.getElementById("username-error").innerHTML = "Name must be filled out";
    }else{
      document.getElementById("username-error").innerHTML = "";
      document.getElementById("User").style.borderColor = "grey";
    }

    if (email == "") {
      e.preventDefault();
        // alert("Name must be filled out");
        document.getElementById("Email").style.borderColor = "red";
        document.getElementById("email-error").innerHTML = "Email must be filled out";
    }else{
      document.getElementById("Email").style.borderColor = "grey";
        document.getElementById("email-error").innerHTML = "";
    }

    
if(email.value.match(mailformat))
{
document.form1.text1.focus();
return true;
}
else
{
alert("Invalid email address.");
document.form1.text1.focus();
return false;

}
  }
</script>
</body>
</html>