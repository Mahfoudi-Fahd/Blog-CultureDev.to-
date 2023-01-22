<?php 
    include '../controllers/crud.php';

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];

        $date = date("Y-m-d h:i:s A");

        $a = new database();
        $a->update('category',['name'=>$name],"id='$id'");
        if ($a == true) {
            header('location:categories.php');
        }
    }
?>