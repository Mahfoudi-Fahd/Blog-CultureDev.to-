<?php 
    include '../controllers/crud.php';

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $category = $_POST['category'];

    
        $image = $_FILES['image']['name'] ?: $_POST['image'];
        $target = "../assets/img/" . $image;
        move_uploaded_file($_FILES['image']['tmp_name'],$target);
        

        // $date = date("Y-m-d h:i:s A");

        $a = new database();
        $a->update('articles',['title'=>$title,'description'=>$description,'image'=>$image,'category'=>$category],"id='$id'");
        if ($a == true) {
            header('location:posts.php');
        }
    }
?>