<?php 
    include '../controllers/crud.php';
    if (isset($_POST['submit'])) {

        $title = $_POST['title'];
        $description = $_POST['description'];
        $category = $_POST['category'];

        $image = ($_FILES['image']['name']);
        $target = "../assets/img/". $image;

        
        move_uploaded_file($_FILES['image']['tmp_name'],$target);

        $a = new database();
        $a->insert('articles',['title'=>$title,'description'=>$description,'image'=>$image,'category_id'=>$category]);
        
        if ($a == true) {
            header('location:posts.php');
        }
    }
?>