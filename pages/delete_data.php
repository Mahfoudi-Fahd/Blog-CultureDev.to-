<?php 
    include '../controllers/crud.php';

    $id = $_GET['id'];

    $a = new database();
    $a->delete('category',"id='$id'");
    if($a){
        header('location:categories.php');
    }
?>