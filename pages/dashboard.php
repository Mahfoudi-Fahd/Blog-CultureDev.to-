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
    
<!-- sidebar -->
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
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">User</span>
       </a>
       <span class="tooltip">User</span>
     </li>
  
     <li>
       <a href="statistics.php">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Analytics</span>
       </a>
       <span class="tooltip">Analytics</span>
     </li>
    
     
   
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
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
  <section class="home-section">
      <div class="text">Dashboard</div>
      
      <div class="main-body">
      <div class="promo_card">
        <h1>Welcome <?php echo $user["username"]; ?> to CultureDev.to™</h1>
        <span>CultureDev.to™ est un système de gestion d'articles qui sont liés au développement d'applications Web et mobiles en ligne.</span>
        
      </div>

      <div class="history_lists">
        <div class="list1">
          <div class="row">
            <h4>Articles</h4>
            <!-- <a href="#">See all</a> -->
          </div>
          <div style="overflow-x:auto;">
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>title</th>
                <th>description</th>
                <th>image</th>
                <th>category</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>2, Aug, 2022</td>
                <td>Sam Tonny</td>
                <td>Premimum</td>
                <td>AI</td>
              </tr>
              
            </tbody>
          </table>
        </div>
        </div>

      
  </section>

  <script src="../assets/js/main.js"></script>
  </body>
</html>