<?php 
    include '../controllers/crud.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<meta charset="UTF-8">
<title> dashboard </title>
<link rel="stylesheet" href="../assets/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>   
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>



<body>
  
    <!-- sidebar -->
    <?php include '../includes/side.php';?>

  
    <section class="home-section">
          <div class="d-flex justify-content-between align-items-center ">
            <div class="text">Posts</div>
          </div>
          <form  class="container d-flex justify-content-center col-md-12" action="insert_posts.php" method="post" enctype="multipart/form-data">
            <div class="col-md-10">
              <?php include 'form_posts.php'; ?>
              <input type="submit" class="ms-0 btn btn-primary" name="submit" value="Insert">
            </div>
          </form> 
        <div class="main-body"> 
          <div class="table-container d-flex justify-content-center">
            <table id="table" class="m-5 table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Description</th>
                  <th scope="col">Category</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                  $b = new database();
                  $b->select("articles INNER JOIN category on articles.category_id = category.id","articles.*, category.name");
                 
                  $result = $b->sql;
              ?>
              <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                  <tr>
                    <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['title']; ?></td>
                      <td><?php echo $row['description']; ?></td>
                      <td><?php echo  $row['name'];?></td>
                      
                      <td>
                          <a href="edit_posts.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-secondary ">Edit</a>
                          <a href="delete_post.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-danger">Delete</a>
                      </td>
                  </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>  
        </div>    




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  
    </section>
      <script src="../assets/js/main.js"></script>   
         <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
         <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
         <script>
          $(document).ready(function () {
    $('#table').DataTable({
      "pagingType":"full_numbers",
      "lengthMenu":[
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
    ],
    responsive:true,
    language:{
      search: "_INPUT_",
      searchPlaceholder:"Search Articles",
    }
    });
});
         </script>
</body>
</html>