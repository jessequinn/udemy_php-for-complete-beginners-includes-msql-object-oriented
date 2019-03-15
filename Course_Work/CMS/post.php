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

            if(isset($_GET['pid'])) {
                $post_id = $con->real_escape_string($_GET['pid']);


                $query = "SELECT * FROM posts WHERE post_id = $post_id ";
                $res = $con->query($query);

                if ($res === FALSE) {
                    die($con->affected_rows($con));
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
            }

            ?>


                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

            </div>

<?php include 'includes/sidebar.php'; ?>
<?php include "includes/footer.php"; ?>