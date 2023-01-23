<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <title>Edit</title>
 
</head>
<body>
    <?php include '../includes/side.php'; ?>
<section class="home-section">
       
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="row">
                        <?php 
                            include '../controllers/crud.php';

                            $id = $_GET['id'];

                            $b = new database();
                            $b->select("articles","*","id='$id'");
                            $result = $b->sql;
                            $row = mysqli_fetch_assoc($result);
                        ?>
                        <div class="col-md-12" id="hide">

                            <form  class="row form " action="update_posts.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <?php include 'form_posts.php'; ?>
                                <div class="col-12 form-group">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Update">
                                    <a class="btn btn-secondary" href="posts.php">Close</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </section>
    </body>
</html>