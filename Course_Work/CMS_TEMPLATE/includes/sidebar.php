<div class="col-md-4">
    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>
        <form action="search.php" method="post">
            <div class="input-group">
                <input type="text" class="form-control" name="search">
                <span class="input-group-btn">
                    <button name="submit" class="btn btn-default" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.input-group -->
    </div>

    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                    <?php

                    $query = "SELECT * FROM categories LIMIT 3";
                    $res = mysqli_query($con, $query);

                    if ($res === FALSE) {
                        die(mysqli_error($con));
                    }

                    while ($row = mysqli_fetch_assoc($res)) {
                        $cat_title = $row['cat_title'];
                        echo "<li><a href='#'>{$cat_title}</a></li>";
                    }

                    ?>
                </ul>
            </div>
        </div>
        </div>
        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
<?php include "widget.php" ?>
</div>