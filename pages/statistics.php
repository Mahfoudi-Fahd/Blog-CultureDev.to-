<?php
include '../controllers/crud.php';
$c = new database();
                  $c->select("articles","*");
                  $result = $c->sql;
                  $array =[];
                  while($row = mysqli_fetch_assoc($result)){
                    array_push($array,$row);
                };
                // print_r($array);

$d = new database();
                $d->select("category","*");
                $result = $d->sql;
                $category =[];
                while($row = mysqli_fetch_assoc($result)){
                  array_push($category,$row);
};


$a = new database();
                $a->select("admin","*");
                $result = $a->sql;
                $admin =[];
                while($row = mysqli_fetch_assoc($result)){
                  array_push($admin,$row);
};
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<title> dashboard </title>
<link rel="stylesheet" href="../assets/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>   
</head>



  <body>
    
<!-- sidebar -->
    <?php include '../includes/side.php';?>


        <section class="home-section">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="text">Statistics</div>
            
    </div>
            
<div class="main-body d-flex justify-content-evenly"> 
  <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="d-flex justify-content-center card-title">Toltal Posts</h5>
        <p class="d-flex justify-content-center card-text"><?php 
        echo count($array); ?></p>
      </div>
  </div>
  <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class=" d-flex justify-content-center card-title">Toltal Categories</h5>
        <p class="d-flex justify-content-center card-text"><?php 
        echo count($category); ?></p>
      </div>
  </div>
  <div class="card" style="width: 18rem;">
      <div class=" card-body">
        <h5 class="card-title d-flex justify-content-center">Toltal Developpers</h5>
        <p class="d-flex justify-content-center card-text"><?php 
        echo count($admin); ?></p>
      </div>
  </div>
</div>



  </section>

  <script src="../assets/js/main.js"></script>
            
        </body>
        </html>