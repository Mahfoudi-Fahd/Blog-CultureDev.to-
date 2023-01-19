
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
            <div class="text">Posts</div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Post
            </button>
    </div>
            
    <div class="main-body"> 
        <div class="table-container">
            <table class="m-5 table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Category</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td ><i class='me-3 btn btn-secondary bx bx-edit-alt'></i><i class='btn btn-secondary bx bx-message-square-x'></i></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>         
    </div>



  </section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    <input class="form-control" name="title" id="title" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="category"></label>
    <select class="form-control" name="category" id="category">
      <option selected disabled >Choose Category</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  
  <div class="mt-4 form-group">
    <label for="image"></label>
    <input type="file" class="form-control-file" id="image">
  </div>

  <div class="form-group">
    <label for="description"></label>
    <textarea class="form-control" id="description" name="description" placeholder="Description" rows="3"></textarea>
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
  <script src="../assets/js/main.js"></script>
            
        </body>
        </html>