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
                <option value="<?= $option['id'] ?>"><?= $option['name'] ?></option>
            <?php } ?>
        </select>
    </div>


    <div class="mb-3">
        <label for="formFile" class="form-label"></label>
        <input class="form-control" value="<?= $row['image'] ?>" name="image" type="file" id="formFile">
        <input class="form-control" id="id" name="image" value="<?= $row['image'] ?>" type="hidden">
    </div>

<div class="col-md-12">
    <label for="register-form-name"></label>
    <textarea class="form-control" name="description" placeholder="Description..."><?php if(isset($row)) { echo $row['description']; } ?></textarea>
</div>