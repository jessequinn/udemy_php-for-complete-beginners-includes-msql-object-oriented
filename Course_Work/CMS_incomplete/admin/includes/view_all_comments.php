<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Author</th>
        <th>Comment</th>
        <th>Email</th>
        <th>Status</th>
        <th>In Response to</th>
        <th>Date</th>
        <th>Approve</th>
        <th>Unapprove</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $query = "SELECT * FROM comments";
    $res = $con->query($query);

    if ($res === FALSE) {
        die($con->affected_rows());
    }

    while ($row = $res->fetch_assoc()) {
        echo <<<EOL
        <tr>
            <td>{$row['comment_id']}</td>
            <td>{$row['comment_author']}</td>
            <td>{$row['comment_content']}</td>
            <td>{$row['comment_email']}</td>
            <td>{$row['comment_status']}</td>
            <td></td>
            <td>{$row['comment_date']}</td>
            <td></td>
            <td></td>
            <td><a href="comments.php?source=update_comment&cid={$row['comment_id']}">Edit</a></td>
            <td><a href="comments.php?delete={$row['comment_id']}">Delete</a></td>
        </tr>
        EOL;
    }

    /* free result set */
    $res->free();
    ?>
    </tbody>
</table>