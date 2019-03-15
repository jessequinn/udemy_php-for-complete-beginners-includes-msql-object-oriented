<form action="" method="post">
    <div class="form-group">
        <label for="cat_title">Edit Category</label>
        <?php
        if (isset($_GET['edit'])) {
            echo <<<EOL
            <input type="text" name="cat_title" class="form-control" value="{$row_edit['cat_title']}">
            <input type="hidden" name="cat_id" value="{$row_edit['cat_id']}">
            EOL;
        } else {
            echo <<<EOL
            <input type="text" name="cat_title" class="form-control">
            EOL;
        }
        ?>
    </div>
    <div class="form-group">
        <input type="submit" name="update_category" value="Update Category" class="btn btn-primary">
    </div>
</form>