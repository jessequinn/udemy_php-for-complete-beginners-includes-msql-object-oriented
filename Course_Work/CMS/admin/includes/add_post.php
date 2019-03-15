<?php
if(isset($_POST['create_post'])) {
    $post_title = $_POST['post_title'];
    $post_category_id = $_POST['post_category_id'];
    $post_status = $_POST['post_status'];
    $post_img = $_FILES['post_image']['name'];
    $post_img_tmp = $_FILES['post_image']['tmp_name'];
    $post_tags = $_POST['post_tags'];
    $post_content = $_POST['post_content'];
    $post_date = date('d-m-y');
    $post_comment_count = 4;
    $post_views_count = 4;
    $post_author = $_POST['post_author'];
    $post_user = 'jessequinn';

    /* clean variables prior to SQL INSERT */
    $post_title = $con->real_escape_string($con, $post_title);
    $post_category_id = $con->real_escape_string($con, $post_category_id);
    $post_status = $con->real_escape_string($con, $post_status);
    $post_author = $con->real_escape_string($con, $post_author);
    $post_content = $con->real_escape_string($con, $post_content);
    $post_tags = $con->real_escape_string($con, $post_tags);

    move_uploaded_file($post_img_tmp, "../images/$post_img");

    $query = "INSERT INTO posts(post_category_id, post_title, post_author, ";
    $query .= "post_date, post_img, post_user, post_content, post_tags, post_comment_count, post_status, post_views_count) ";
    $query .= "VALUES({$post_category_id}, '{$post_title}', '{$post_author}', now(), '{$post_img}', '{$post_user}', ";
    $query .= "'{$post_content}', '{$post_tags}', {$post_comment_count}, '{$post_status}', {$post_views_count}) ";
    $res = $con->query($query);

    confirmSQLResult($res);
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="post_title">Post Title</label>
        <input type="text" class="form-control" name="post_title">
    </div>
    <div class="form-group">
        <label for="post_category">Post Category ID</label>
        <input type="text" class="form-control" name="post_category_id">
    </div>
    <div class="form-group">
        <label for="post_author">Post Author</label>
        <input type="text" class="form-control" name="post_author">
    </div>
    <div class="form-group">
        <label for="post_status">Post Status</label>
        <input type="text" class="form-control" name="post_status">
    </div>
    <div class="form-group">
        <label for="post_image">Post Image</label>
        <input type="file" class="form-control" name="post_image">
    </div>
    <div class="form-group">
        <label for="post_tags">Post Tags</label>
        <input type="text" class="form-control" name="post_tags">
    </div>
    <div class="form-group">
        <label for="post_content">Post Content</label>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" name="create_post" class="btn btn-primary" value="Publish Post">
    </div>
</form>