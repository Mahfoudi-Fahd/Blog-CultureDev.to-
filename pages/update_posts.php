<?php 
    include '../controllers/crud.php';

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        // $date = date("Y-m-d h:i:s A");

        $a = new database();
        $a->update('articles',['title'=>$title,'description'=>$description],"id='$id'");
        if ($a == true) {
            header('location:posts.php');
        }
    }
?>