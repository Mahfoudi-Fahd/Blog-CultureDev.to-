<?php 
    include '../controllers/crud.php';

    $id = $_GET['id'];

    $a = new database();
    $a->delete('articles',"id='$id'");
    if($a){
        header('location:posts.php');
    }
?>