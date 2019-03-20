<?php
if(isset($_POST['update_post'])) {
    $post_title = $_POST['post_title'];
    $post_category_id = $_POST['post_category'];
    $post_status = $_POST['post_status'];
    $post_img = $_FILES['post_img']['name'];
    $post_img_tmp = $_FILES['post_img']['tmp_name'];
    $post_tags = $_POST['post_tags'];
    $post_content = $_POST['post_content'];
    $post_date = date('d-m-y');
    $post_comment_count = 4;
    $post_views_count = 4;
    $post_author = $_POST['post_author'];
    $post_user = 'jessequinn';
    $post_id = $_POST['post_id'];

    /* clean variables prior to SQL INSERT */
    $post_title = $con->real_escape_string($post_title);
    $post_category_id = $con->real_escape_string($post_category_id);
    $post_status = $con->real_escape_string($post_status);
    $post_author = $con->real_escape_string($post_author);
    $post_content = $con->real_escape_string($post_content);
    $post_tags = $con->real_escape_string($post_tags);
    $post_img = $con->real_escape_string($post_img);

    move_uploaded_file($post_img_tmp, "../images/$post_img");

    if(empty($post_img)) {
        $post_img = $con->real_escape_string($_POST['post_img_org']);
    }

    $query = "UPDATE posts SET ";
    $query .= "post_category_id = '{$post_category_id}', ";
    $query .= "post_title = '{$post_title}', ";
    $query .= "post_author = '{$post_author}', ";
    $query .= "post_date = now(), ";
    $query .= "post_img = '$post_img', ";
    $query .= "post_user = '$post_user', ";
    $query .= "post_content = '$post_content', ";
    $query .= "post_tags = '$post_tags', ";
    $query .= "post_comment_count = '$post_comment_count', ";
    $query .= "post_status = '$post_status', ";
    $query .= "post_views_count = '$post_views_count' ";
    $query .= "WHERE post_id = $post_id ";
    $res = $con->query($query);

    confirmSQLResult($res);
}

if(isset($_GET['pid'])) {
    $pid = $con->real_escape_string($_GET['pid']);

    $query = "SELECT * FROM posts where post_id = {$pid} LIMIT 1";
    $res = $con->query($query);

    confirmSQLResult($res);

    $row = $res->fetch_assoc();
    $res->free();

    $post_title = $row['post_title'];
    $post_category_id = $row['post_category_id'];
    $post_status = $row['post_status'];
    $post_img = $row['post_img'];
    $post_tags = $row['post_tags'];
    $post_content = $row['post_content'];
    $post_date = $row['post_date'];
    $post_comment_count = $row['post_comment_count'];
    $post_views_count = $row['post_views_count'];
    $post_author = $row['post_author'];
    $post_user = $row['post_user'];

    echo <<<EOL
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" value="$pid" name="post_id">
        <div class="form-group">
            <label for="post_title">Post Title</label>
            <input type="text" class="form-control" name="post_title" value="$post_title">
        </div>      
        <div class="form-group">
            <select name="post_category" id="">
    EOL;
    $query = "SELECT * FROM categories";
    $res = $con->query($query);
    
    confirmSQLResult($res);
                
    while($row = $res->fetch_assoc()) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];

        $if = function($condition, $true, $false) {return $condition ? $true : $false; };

        echo <<<EOL
        <option value="$cat_id" {$if(($post_category_id === $cat_id), 'selected', '')}>$cat_title</option>
        EOL;
     }
     $res->free();
     echo <<<EOL
            </select>       
        </div>
        <div class="form-group">
            <label for="post_author">Post Author</label>
            <input type="text" class="form-control" name="post_author" value="$post_author">
        </div>
        <div class="form-group">
            <label for="post_status">Post Status</label>
            <input type="text" class="form-control" name="post_status" value="$post_status">
        </div>
        <div class="form-group">
            <input type="hidden" name="post_img_org" value="$post_img">
            <img src="../images/$post_img" alt="image">
        </div>
        <div class="form-group">
            <label for="post_img">Post Image</label>
            <input type="file" class="form-control" name="post_img">
        </div>
        <div class="form-group">
            <label for="post_tags">Post Tags</label>
            <input type="text" class="form-control" name="post_tags" value="$post_tags">
        </div>
        <div class="form-group">
            <label for="post_content">Post Content</label>
            <textarea class="form-control" name="post_content" id="" cols="30" rows="10">$post_content</textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="update_post" class="btn btn-primary" value="Update Post">
        </div>
    </form>
    EOL;
}
?>

