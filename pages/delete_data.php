<?php 
    include '../controllers/crud.php';

    $id = $_POST['id'];

    $a = new database();
    $a->delete('category',"id='$id'");
?>