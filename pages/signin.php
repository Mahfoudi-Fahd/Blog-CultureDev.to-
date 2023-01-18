<?php

require '../controllers/functions.php';

if(!empty($_SESSION["id"])){
  header("Location: dashboard.php");
}

$login = new Login();

if(isset($_POST["login"])){
  $result = $login->login($_POST["username"], $_POST["password"]);

  if($result == 1){
    $_SESSION["login"] = true;
    $_SESSION["id"] = $login->idUser();
    header("Location: signup.php");
  }
  elseif($result == 10){
    echo
    "<script> alert('Wrong Password'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('User Not Registered'); </script>";
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
    <title>signin</title>
</head>
<body>
  <div class="d-flex container">

    <section class="container form col-md-4">
        <form method="POST" action="">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" name="username" class="form-control" id="username" >
            </div>
            <div class="mb-3">
              <label for="Password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="Password">
            </div>
            

            <div class="d-flex justify-content-center">

            <button type="submit" name="login" class="btn btn-primary">Login</button>
            </div>
            
          </form>
    </section>

    <section class="welcome">
      <h1 class="d-flex justify-content-center">Hello Dev !</h1>
      <p>Enter your personal details and start journey with us</p>
      <a href="signup.php" class="btn btn-primary d-flex justify-content-center">SignUp</a>
    </section>

  </div>
</body>
</html>