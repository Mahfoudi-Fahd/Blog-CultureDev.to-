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
    <h1>Welcome <?php echo $user["username"]; ?></h1>
    <a href="logout.php">Logout</a>
    
    <!-- sidebar -->
    <div class="sidebar">
  <a href="#" class="sidebar-toggle">Toggle Sidebar</a>
  <nav>
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
  </nav>
</div>

</div>

<!-- cards -->

    <div class="card" style="width:18rem;">
        <div class="card-body">
            <h5 class="card-title">nombre d'articles</h5>

        </div>

    </div>
  

  </body>
</html>