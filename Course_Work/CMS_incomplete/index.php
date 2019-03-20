<?php include 'includes/db.php'; ?>
    <!-- Header -->
<?php include 'includes/header.php' ?>

    <body>

    <!-- Navigation -->
<?php include 'includes/nav.php'; ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <h1 class="page-header">
                    Page Heading
                    <small>Secondard Text</small>
                </h1>
            <?php

            $query = "SELECT * FROM posts ORDER BY post_date DESC";
            $res = $con->query($query);

            if ($res === FALSE) {
                die($con->affected_rows());
            }

            while ($row = $res->fetch_assoc()) {
                $post_id = $row['post_id'];
                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_date = $row['post_date'];
                $post_img = $row['post_img'];
                $post_content = substr($row['post_content'], 0, 100);

                echo <<<EOL
 
                
                <!-- First Blog Post -->
                <h2>
                    <a href="post.php?pid=$post_id">{$post_title}</a>
                </h2>
                <p class="lead">
                by <a href="index.php">{$post_author}</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on {$post_date}</p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p>{$post_content}</p>
                <a class="btn btn-primary" href="#">Read More <span
                class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>
                EOL;
            }

            ?>
            </div>

<?php include 'includes/sidebar.php'; ?>
<?php include "includes/footer.php"; ?>