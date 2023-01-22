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
    <meta charset="UTF-8">
    <title> dashboard </title>
    <link rel="stylesheet" href="../assets/style.css">
    
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>


   <body>
       
       <div class="sidebar">
        <div class="logo-details">
          <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">CultureDev</div>
            <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav-list">
        
          <li>
            <a href="dashboard.php">
              <i class='bx bx-grid-alt'></i>
              <span class="links_name">Dashboard</span>
            </a>
             <span class="tooltip">Dashboard</span>
          </li>
          <li>
           <a href="posts.php">
            <i class='bx bx-chat'></i>
             <span class="links_name">Posts</span>
           </a>
           <span class="tooltip">Posts</span>
         </li>
         <li>
           <a href="categories.php">
           <i class='bx bx-category-alt'></i>
            <span class="links_name">Categories</span>
           </a>
           <span class="tooltip">Categories</span>
         </li>
      
         <li>
           <a href="statistics.php">
             <i class='bx bx-pie-chart-alt-2' ></i>
             <span class="links_name">Analytics</span>
           </a>
           <span class="tooltip">Analytics</span>
         </li>
        
         
       
         <li class="profile">
             <div class="profile-details">
               <img src="../assets/img/379-1662715378.jfif" alt="profileImg">
               <div class="name_job">
                 <div class="name"><?php echo $user["username"]; ?></div>
                 
               </div>
             </div>
             <a href="logout.php"><i class='bx bx-log-out' id="log_out" ></i></a>
             
         </li>
        </ul>
      </div>
      <script src="../assets/js/main.js"></script>
  </body>
</html>