
<?php 
    include '../controllers/crud.php';
    if (isset($_POST['save'])) {
        
        $name = $_POST['name'];

        $date = date("Y-m-d h:i:s A");

        $a = new database();
        $a->insert('category',['name'=>$name,'date'=>$date]);
        if ($a == true) {
            header('location:categories.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<title> dashboard </title>
<link rel="stylesheet" href="../assets/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>   
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
</head>
 <body>
<?php include '../includes/side.php'?>

<section class="home-section">
<div class="d-flex justify-content-between align-items-center ">
    <div class="text">Categories</div>
            
        </div> 
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-md-12" id="hide">
                            <form  class="" action="insert.php" method="post">
                                <div class="d-flex justify-content-between col-12 form-group">
                                    <?php include 'form.php'; ?>
                                    <input type="submit" class="btn btn-primary" name="submit" value="Insert">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12 p-0">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Created on</th>
                                        <th scope="col" colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $b = new database();
                                        $b->select("category","*");
                                        $result = $b->sql;
                                    ?>
                                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            
                                            <td>
                                                <a href="edit.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-secondary ">Edit</a>
                                            </td>
                                            <td>
                                                <a href="" type="button"  data-toggle="modal" data-id="<?php echo $row['id']; ?>" data-target="#myModal" id="del" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $(document).on('click',"#del",function(e) {
                e.preventDefault();
                var del = $(this).data('id');

                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url : "delete_data.php",
                            type : "POST",
                            data : {id:del},
                            success : function() {
                                swal({
                                    title: "Sweet!",
                                    text: "Delete data",
                                    imageUrl: 'thumbs-up.jpg'
                                }); 
                            }
                        });
                        swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
            });
        });
    </script>

</section> 

                
</body>
</html>