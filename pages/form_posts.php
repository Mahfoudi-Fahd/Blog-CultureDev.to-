<div class="ms-5 col-md-4 col-sm-10 form-group">
    <label for=""></label>
    <input type="text" placeholder="Title" name="title" value="<?php if(isset($row)) { echo $row['title']; } ?>" class="form-control"  required>
</div>
<select name="category" id="category" class=" form-control">
<?php foreach ($category as $category) { ?>
<option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
<?php } ?>
</select>
<div class="col-md-4 col-sm-10 form-group">
    <label for="register-form-name"></label>
    <textarea class="form-control" name="description" placeholder="Description..."><?php if(isset($row)) { echo $row['description']; } ?></textarea>
</div>