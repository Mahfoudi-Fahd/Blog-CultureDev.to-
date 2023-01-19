<?php
// require '../controllers/functions.php';

// $select = new Select();

// if(isset($_SESSION["id"])){
//   $user = $select->selectUserById($_SESSION["id"]);
  
// }
// else{
//   header("Location: signin.php");
// }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title> dashboard </title>
    <link rel="stylesheet" href="../assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   </head>



  <body>
    
<!-- sidebar -->
    <?php include '../includes/side.php';?>


  <section class="home-section">
      <div class="text">Dashboard</div>
      
      <div class="main-body">
      <div class="promo_card">
        <h1>Welcome <?php echo $user["username"]; ?> to CultureDev.to™</h1>
        <span>CultureDev.to™ est un système de gestion d'articles qui sont liés au développement d'applications Web et mobiles en ligne.</span>
        
      </div>

     

      
  </section>

  <script src="../assets/js/main.js"></script>
  </body>
</html>