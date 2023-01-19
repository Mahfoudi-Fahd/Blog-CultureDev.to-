


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
<?php include '../includes/side.php'?>

<section class="home-section">
<div class="d-flex justify-content-between align-items-center ">
    <div class="text">Categories</div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categorymodal">
                Add Category
            </button>
        </div> 


        <table class="m-5 table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Category Name</th>
            <th scope="col">Creater</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td> 
      <td ><i class='me-3 btn btn-secondary bx bx-edit-alt'></i><i class='btn btn-secondary bx bx-message-square-x'></i></td>

  </tbody>
</table>


        </section> 
        <!-- Modal -->
        <div class="modal fade" id="categorymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Create Post</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form>
              <div class="form-group">
    <label for="title"></label>
    <input class="form-control" name="name" id="name" placeholder="Category Name">
  </div>
 
</form>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
    </div>
    </div>
  </div>
</div>

</body>
</html>