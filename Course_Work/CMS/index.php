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

            <?php

            $query = "SELECT * FROM posts ORDER BY post_date DESC";
            $res = mysqli_query($con, $query);

            if ($res === FALSE) {
                die(mysqli_error($con));
            }

            while ($row = mysqli_fetch_assoc($res)) {
                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_date = $row['post_date'];
                $post_img = $row['post_img'];
                $post_content = $row['post_content'];

                echo <<<EOL
                <h1 class="page-header">
                    Page Heading         
                    <small>Secondard Text</small>
                </h1>
                
                <!-- First Blog Post -->
                <h2>
                    <a href="#">{$post_title}</a>
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