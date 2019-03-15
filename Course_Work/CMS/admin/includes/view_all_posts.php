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
            <td>{$row['post_category_id']}</td>
            <td>{$row['post_status']}</td>
            <td><img width="100%" src="../images/{$row['post_img']}" alt="image"></td>
            <td>{$row['post_tags']}</td>
            <td>{$row['post_comment_count']}</td>
            <td>{$row['post_date']}</td>
        </tr>
        EOL;
    }

    /* free result set */
    $res->free();
    ?>
    </tbody>
</table>