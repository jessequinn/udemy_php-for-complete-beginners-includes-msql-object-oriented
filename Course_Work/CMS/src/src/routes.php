<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes
$app->any('/', function (Request $request, Response $response, array $args) {
    return $this->view->render('index.html.twig');
});

$app->any('/admin', 'Admin\DashboardController:index')
    ->setName('admin-index');

// Post section for admin
$app->get('/admin/posts', 'Admin\PostController:listPosts')
    ->setName('admin-list-posts');
$app->get('/admin/posts/delete/{id}', 'Admin\PostController:deletePost')
    ->setName('admin-delete-post');
$app->get('/admin/posts/edit/{id}', 'Admin\PostController:editCategory')
    ->setName('admin-edit-post');
$app->any('/admin/posts/add', 'Admin\PostController:addUpdatePost')
    ->setName('admin-add-update-post');


$app->get('/blog', 'Blog\BlogController:listPosts')
    ->setName('blog-list-posts');
$app->map(['GET', 'POST'], '/blog/commentAdd/{id}', 'Blog\BlogController:addComment')
    ->setName('blog-add-comment');
$app->get('/blog/post/{id}', 'Blog\BlogController:listPost')
    ->setName('blog-list-post');

// Categories section for admin
$app->get('/admin/categories', 'Admin\CategoryController:listCategories')
    ->setName('admin-list-categories');
$app->get('/admin/categories/delete/{id}', 'Admin\CategoryController:deleteCategory')
    ->setName('admin-delete-category');
$app->post('/admin/categories/add', 'Admin\CategoryController:addUpdateCategory')
    ->setName('add-update-category');
$app->get('/admin/categories/edit/{id}', 'Admin\CategoryController:editCategory')
    ->setName('edit-category');

// Comment seection for admin
$app->get('/admin/comments', 'Admin\CommentController:listComments')
    ->setName('admin-list-comments');
$app->get('/admin/comments/delete/{id}', 'Admin\CommentController:deleteComment')
    ->setName('admin-delete-comment');
$app->get('/admin/comments/edit/{id}', 'Admin\CommentController:editCommentForm')
    ->setName('admin-edit-comment-form');
$app->post('/admin/comments/edit/submit', 'Admin\CommentController:editComment')
    ->setName('admin-edit-comment');
$app->get('/admin/comments/approve/{id}', 'Admin\CommentController:approveComment')
    ->setName('admin-approve-comment');
$app->get('/admin/comments/unapprove/{id}', 'Admin\CommentController:unapproveComment')
    ->setName('admin-unapprove-comment');

// User section for admin
$app->get('/admin/users', 'Admin\UserController:listUsers')
    ->setName('admin-list-users');
$app->get('/admin/users/delete/{id}', 'Admin\UserController:deleteUser')
    ->setName('admin-delete-user');
$app->get('/admin/users/add', 'Admin\UserController:addUserForm')
    ->setName('admin-add-user-form');
$app->post('/admin/users/add/submit', 'Admin\UserController:addUser')
    ->setName('admin-add-user');
$app->get('/admin/users/edit/{id}', 'Admin\UserController:editUserForm')
    ->setName('admin-edit-user-form');
$app->post('/admin/users/edit/submit', 'Admin\UserController:editUser')
    ->setName('admin-edit-user');
$app->get('/admin/users/approve/{id}', 'Admin\UserController:approveUser')
    ->setName('admin-approve-user');
$app->get('/admin/users/unapprove/{id}', 'Admin\UserController:unapproveUser')
    ->setName('admin-unapprove-user');

// login section
$app->get('/login', 'Login\LoginController:loginForm')
    ->setName('login-form');
$app->post('/login/submit', 'Login\LoginController:loginUser')
    ->setName('login-user');
$app->get('/logout', 'Login\LoginController:logoutUser')
    ->setName('logout-user');
