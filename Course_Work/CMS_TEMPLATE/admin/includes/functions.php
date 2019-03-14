<?php
function insertCategory()
{
    global $con;
    if (isset($_POST['submit'])) {
        $cat_title = $_POST['cat_title'];
        if ($cat_title == "" || empty($cat_title)) {
            echo "Title is empty";
        } else {
            $query = "INSERT INTO categories(cat_title) ";
            $query .= "VALUES('{$cat_title}') ";

            $res = mysqli_query($con, $query);

            if ($res === FALSE) {
                die(mysqli_error($con));
            }
        }
    }
}

function updateCategory()
{
    global $con;
    if (isset($_POST['update_category'])) {
        $cat_title = $_POST['cat_title'];
        $cat_id = $_POST['cat_id'];
        if ($cat_title == "" || empty($cat_title)) {
            echo "Title is empty";
        } else {
            $query = "UPDATE categories SET cat_title = '{$cat_title}' WHERE cat_id = {$cat_id} ";

            $res = mysqli_query($con, $query);

            if ($res === FALSE) {
                die(mysqli_error($con));
            }
        }
    }
}

function deleteCategory()
{
    global $con;
    if (isset($_GET['delete'])) {
        $query = "DELETE FROM categories WHERE cat_id = {$_GET['delete']} ";

        $res = mysqli_query($con, $query);

        if ($res === FALSE) {
            die(mysqli_error($con));
        }
    }

}

function findCategory()
{
    global $con;
    if (isset($_GET['edit'])) {
        $query = "SELECT * FROM categories WHERE cat_id = {$_GET['edit']} ";

        $res = mysqli_query($con, $query);

        if ($res === FALSE) {
            die(mysqli_error($con));
        }

        return mysqli_fetch_assoc($res);
    }
}

function findAllCategories()
{
    global $con;
    $query = "SELECT * FROM categories";
    $res = mysqli_query($con, $query);

    if ($res === FALSE) {
        die(mysqli_error($con));
    }

    while ($row = mysqli_fetch_assoc($res)) {
        echo <<<EOL
        <tr>
            <td>{$row['cat_id']}</td>
            <td>{$row['cat_title']}</td>
            <td><a href="categories.php?edit={$row['cat_id']}">Edit</a></td>
            <td><a href="categories.php?delete={$row['cat_id']}">Delete</a></td>
        </tr>
        EOL;
    }
}


?>