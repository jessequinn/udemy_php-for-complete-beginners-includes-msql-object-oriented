<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Author</th>
        <th>Title</th>
        <th>Category</th>
        <th>Status</th>
        <th>Image</th>
        <th>Tags</th>
        <th>Comments</th>
        <th>Date</th>
    </tr>
    </thead>
    <tbody>
    <?php
    global $con;
    $query = "SELECT * FROM posts";
    $res = $con->query($query);

    if ($res === FALSE) {
        die(mysqli_error($con));
    }

    while ($row = $res->fetch_assoc()) {
        echo <<<EOL
        <tr>
            <td>{$row['post_id']}</td>
            <td>{$row['post_author']}</td>
            <td>{$row['post_title']}</td>
        EOL;

        $query = "SELECT * FROM categories WHERE cat_id = {$row['post_category_id']} ";
        $res_cat = $con->query($query);

        confirmSQLResult($res_cat);

        $row_cat= $res_cat->fetch_assoc();

        $cat_title = $row_cat['cat_title'];

        echo <<<EOL
            <td>{$cat_title}</td>
            <td>{$row['post_status']}</td>
            <td><img width="100%" src="../images/{$row['post_img']}" alt="image"></td>
            <td>{$row['post_tags']}</td>
            <td>{$row['post_comment_count']}</td>
            <td>{$row['post_date']}</td>
            <td><a href="posts.php?source=update_post&pid={$row['post_id']}">Edit</a></td>
            <td><a href="posts.php?delete={$row['post_id']}">Delete</a></td>
        </tr>
        EOL;
    }

    /* free result set */
    $res->free();
    ?>
    </tbody>
</table>