<!-- Header -->
<?php include "includes/admin_header.php"; ?>

<div id="wrapper">
    <!-- Navigation -->
    <?php include "includes/admin_nav.php"; ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to Admin
                        <small>Author</small>
                    </h1>
                    <?php

                    if(isset($_GET['source'])) {
                        $source = $_GET['source'];
                    } elseif (isset($_GET['delete'])) {
                        $post_id = $_GET['delete'];
                        $source = '';

                        $post_id = $con->real_escape_string($post_id);

                        $query = "DELETE FROM posts WHERE post_id = {$post_id} ";
                        $res = $con->query($query);

                        confirmSQLResult($res);
                    } else {
                        $source = '';
                    }

                    switch($source) {
                        case 'add_post':
                            include "includes/add_post.php";
                            break;
                        case 'update_post':
                            include "includes/update_post.php";
                            break;
                        default:
                            include "includes/view_all_posts.php";
                            break;
                    }

                    ?>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<?php include "includes/admin_footer.php"; ?>