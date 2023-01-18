<?php
require '../controllers/functions.php';

$select = new Select();

if(isset($_SESSION["id"])){
  $user = $select->selectUserById($_SESSION["id"]);
  
}
else{
  header("Location: signin.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>dashboard</title>
    
    <link rel="stylesheet" href="../assets/style.css">
    <script src="../assets/js/main.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <!-- <h1>Welcome <?php echo $user["username"]; ?></h1>
    <a href="logout.php">Logout</a> -->
    
    <!-- sidebar -->
    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<!-- Use any element to open the sidenav -->
<span onclick="openNav()">open</span>

<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
<h1>Welcome <?php echo $user["username"]; ?></h1>
    <a href="logout.php">Logout</a>
</div>

</div>

<!-- cards -->

    <!-- <div class="card" style="width:18rem;">
        <div class="card-body">
            <h5 class="card-title">nombre d'articles</h5>

        </div>

    </div> -->
  

  </body>
</html>