<?php 
    include '../controllers/crud.php';
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $date = date("Y-m-d h:i:s A");

        $a = new database();
        $a->insert('category',['name'=>$name,'date'=>$date]);
        if ($a == true) {
            header('location:categories.php');
        }
    }
?>