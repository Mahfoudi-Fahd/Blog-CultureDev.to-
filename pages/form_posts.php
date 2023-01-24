<div class=" col-md-12">
    <label for=""></label>
    <input type="text" placeholder="Title" name="title" value="<?php if(isset($row)) { echo $row['title']; } ?>" class="form-control"  required>
</div>

<?php 
    $b = new database();
    $b->select("category","*");
    $result = $b->sql;

?>
    <div class=" col-md-12 ">
        <select name="category" id="category" class=" mt-4 form-select ">
            <option value="<?= $row['category_id'] ?>" disabled selected>Select Category</option>  
            <?php while ($option = mysqli_fetch_assoc($result)) { ?>
                <option value="<?= $option['id'] ?>" <?php if(isset($_GET['id'])){ if($option['id'] == $row['category_id']){ echo "selected"; } }?>><?= $option['name'] ?></option>
            <?php } ?>
        </select>
    </div>


<div class="col-md-12">
    <label for="register-form-name"></label>
    <textarea class="form-control" name="description" placeholder="Description..."><?php if(isset($row)) { echo $row['description']; } ?></textarea>
</div>