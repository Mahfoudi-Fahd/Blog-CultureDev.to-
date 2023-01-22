<?php 
    include '../controllers/crud.php';
    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        // $name = $_POST['name'];
        // $date = date("Y-m-d h:i:s A");

        $a = new database();
        $a->insert('articles',['title'=>$title,'description'=>$description]);
        if ($a == true) {
            header('location:posts.php');
        }
    }
?>