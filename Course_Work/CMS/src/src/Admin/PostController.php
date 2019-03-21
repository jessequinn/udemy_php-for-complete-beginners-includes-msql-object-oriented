<?php

namespace Admin;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Http\UploadedFile;
use Admin\Post as Post;
use Admin\Category as Category;
use Slim\Router;
use Slim\Flash\Messages as FlashMessages;

final class PostController
{
    private $view;
    private $logger;
    private $router;
    private $flash;

    public function __construct(
        Twig $view,
        LoggerInterface $logger,
        Router $router,
        FlashMessages $flash
    )
    {
        $this->view = $view;
        $this->logger = $logger;
        $this->router = $router;
        $this->flash = $flash;
    }

    public function listPosts(Request $request, Response $response, $args)
    {
        $session = new \RKA\Session();
        return $this->view->render($response, 'admin/admin_posts.html.twig', [
            'posts' => Post::orderBy('post_id', 'desc')->get(),
            'categories' => Category::orderBy('cat_title', 'asc')->get(),
            'session' => $session,
            'error' => $this->flash->getFirstMessage('error'),
            'message' => $this->flash->getFirstMessage('message'),
        ]);
    }

    public function addPostForm(Request $request, Response $response, $args)
    {
        $session = new \RKA\Session();

        return $this->view->render($response, 'admin/admin_add_post.html.twig',
            [
                'csrf' => [
                    'name' => $request->getAttribute('csrf_name'),
                    'value' => $request->getAttribute('csrf_value'),
                ],
                'categories' => Category::orderBy('cat_title', 'asc')->get(),
                'error' => $this->flash->getFirstMessage('error'),
                'message' => $this->flash->getFirstMessage('message'),
                'session' => $session,
            ]);
    }

    public function editPostForm(Request $request, Response $response, $args)
    {
        if (isset($args['id'])) {
            $post_data = Post::find($args['id']);

            if ($post_data) {
                $session = new \RKA\Session();

                return $this->view->render($response, 'admin/admin_edit_post.html.twig',
                    [
                        'post_data' => $post_data,
                        'csrf' => [
                            'name' => $request->getAttribute('csrf_name'),
                            'value' => $request->getAttribute('csrf_value'),
                        ],
                        'categories' => Category::orderBy('cat_title', 'asc')->get(),
                        'error' => $this->flash->getFirstMessage('error'),
                        'message' => $this->flash->getFirstMessage('message'),
                        'session' => $session,
                    ]);
            }
        }

        return $response->withRedirect($this->router->pathFor('admin-list-users'));
    }

    public function addPost(Request $request, Response $response, $args)
    {
        if ($request->isPost()) {
            $session = new \RKA\Session();
            $post_data = $request->getParsedBody();
            $uploadedFiles = $request->getUploadedFiles();

            if (empty($uploadedFiles['post_img'])) {
                throw new Exception('Expected a image to be attached.');
            }

            $uploadedFile = $uploadedFiles['post_img'];
            $filename = null;

            if ($uploadedFile->getError() === UPLOAD_ERR_OK) {
                $filename = $this->moveUploadedFile(__DIR__ . '/../../public/images', $uploadedFile);
            } else {
                $filename = $post_data['post_img_org'];
            }

            $validator = Post::getValidator($post_data);

            if ($validator->validate()) {
                $post_add = array(
                    'post_category_id' => $post_data['post_category'],
                    'post_title' => $post_data['post_title'],
                    'post_author' => $post_data['post_author'],
                    'post_user' => $session->user_username,
                    'post_date' => date('y-m-d'),
                    'post_img' => $filename,
                    'post_content' => $post_data['post_content'],
                    'post_tags' => $post_data['post_tags'],
                    'post_comment_count' => 0,
                    'post_status' => $post_data['post_status'],
                    'post_views_count' => 0,
                );

                $post_create = Post::create($post_add);

                if (!$post_create->wasRecentlyCreated) {
                    $this->flash->addMessage('error', 'Error: post was not created');
                    return $response->withRedirect($this->router->pathFor('admin-add-post-form'));

                } else {
                    $this->flash->addMessage('message', 'Message: new post created');
                    return $response->withRedirect($this->router->pathFor('admin-list-posts'));

                }

            } else {
                $this->flash->addMessage('error', 'Error: could not validate inputs');
                return $response->withRedirect($this->router->pathFor('admin-add-post-form'));
            }

            return $response->withRedirect($this->router->pathFor('admin-list-posts'));
        }
    }

    public function editPost(Request $request, Response $response, $args)
    {
        if ($request->isPost()) {
            $post_data = $request->getParsedBody();
            $validator = Post::getValidator($post_data);
            $uploadedFiles = $request->getUploadedFiles();

            if (empty($uploadedFiles['post_img'])) {
                throw new Exception('Expected a image to be attached.');
            }

            $uploadedFile = $uploadedFiles['post_img'];
            $filename = null;

            if ($uploadedFile->getError() === UPLOAD_ERR_OK) {
                $filename = $this->moveUploadedFile(__DIR__ . '/../../public/images', $uploadedFile);
            } else {
                $filename = $post_data['post_img_org'];
            }

            if ($validator->validate()) {
                $post_edit = Post::find($post_data['post_id']);

                if ($post_edit) {
                    $post_edit->post_category_id = $post_data['post_category'];
                    $post_edit->post_title = $post_data['post_title'];
                    $post_edit->post_author = $post_data['post_author'];
                    $post_edit->post_img = $filename;
                    $post_edit->post_content = $post_data['post_content'];
                    $post_edit->post_status = $post_data['post_status'];
                    $post_edit->post_tags = $post_data['post_tags'];
                    $post_edit->save();
                }
            } else {
                $this->flash->addMessage('error', 'Error: could not validate inputs');
                return $response->withRedirect($this->router->pathFor('admin-edit-post-form',
                    [
                        'id' => $post_data['post_id'],
                    ]));
            }
        }

        return $response->withRedirect($this->router->pathFor('admin-list-posts'));
    }

    public function deletePost(Request $request, Response $response, $args)
    {
        if (isset($args['id'])) {
            $post = Post::find($args['id']);

            if ($post) {
                unlink(__DIR__ . '/../../public/images/' . $post['post_img']);
                Post::destroy($args['id']);
            }
        }

        return $response->withRedirect($this->router->pathFor('admin-list-posts'));
    }

    private function moveUploadedFile($directory, UploadedFile $uploadedFile)
    {
        $extension = pathinfo($uploadedFile->getClientFilename(), PATHINFO_EXTENSION);
        $basename = bin2hex(random_bytes(8)); // see http://php.net/manual/en/function.random-bytes.php
        $filename = sprintf('%s.%0.8s', $basename, $extension);
        $uploadedFile->moveTo($directory . DIRECTORY_SEPARATOR . $filename);
        return $filename;
    }
}