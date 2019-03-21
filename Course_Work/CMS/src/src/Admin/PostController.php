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
            'categories' => Category::all(),
            'session' => $session,
        ]);
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

    public function addUpdatePost(Request $request, Response $response, $args)
    {
        $session = new \RKA\Session();

        if ($request->isPost()) {
            $data = $request->getParsedBody();

            $uploadedFiles = $request->getUploadedFiles();
            if (empty($uploadedFiles['post_img'])) {
                throw new Exception('Expected a image to be attached.');
            }

            $uploadedFile = $uploadedFiles['post_img'];

            $filename = null;
            if ($uploadedFile->getError() === UPLOAD_ERR_OK) {
                $filename = $this->moveUploadedFile(__DIR__ . '/../../public/images', $uploadedFile);
            } else {
                $filename = $data['post_img_org'];
            }

            $validator = Post::getValidator($data);

            if ($validator->validate()) {
                if (!empty($data['post_id'])) {
                    $post_edit = Post::find($data['post_id']);

                    if ($post_edit) {
                        $post_edit->post_category_id = $data['post_category'];
                        $post_edit->post_title = $data['post_title'];
                        $post_edit->post_author = $data['post_author'];
                        $post_edit->post_img = $filename;
                        $post_edit->post_content = $data['post_content'];
                        $post_edit->post_status = $data['post_status'];
                        $post_edit->post_tags = $data['post_tags'];
                        $post_edit->save();
                    }
                } else {
                    $postData = array(
                        'post_category_id' => $data['post_category'],
                        'post_title' => $data['post_title'],
                        'post_author' => $data['post_author'],
                        'post_user' => 'jessequinn',
                        'post_date' => date('y-m-d'),
                        'post_img' => $filename,
                        'post_content' => $data['post_content'],
                        'post_tags' => $data['post_tags'],
                        'post_comment_count' => 0,
                        'post_status' => $data['post_status'],
                        'post_views_count' => 0,
                    );

                    Post::create($postData);
                }
            } else {
                $this->logger->error("Error: duplicate username");
                $this->flash->addMessage('error', 'Error: duplicate username');
//                return $response->withRedirect($this->router->pathFor('admin-add-user-form'));
            }
        }

        return $this->view->render($response, 'admin/admin_add_post.html.twig', [
            'categories' => Category::orderBy('cat_title')->get(),
            'session' => $session,
        ]);
    }

    private function moveUploadedFile($directory, UploadedFile $uploadedFile)
    {
        $extension = pathinfo($uploadedFile->getClientFilename(), PATHINFO_EXTENSION);
        $basename = bin2hex(random_bytes(8)); // see http://php.net/manual/en/function.random-bytes.php
        $filename = sprintf('%s.%0.8s', $basename, $extension);
        $uploadedFile->moveTo($directory . DIRECTORY_SEPARATOR . $filename);
        return $filename;
    }

    public function editCategory(Request $request, Response $response, $args)
    {
        $post_edit = null;

        if (isset($args['id'])) {
            $post_edit = Post::find($args['id']);
        }

        return $this->view->render($response, 'admin/admin_add_post.html.twig', [
            'post_edit' => $post_edit,
            'categories' => Category::all(),
        ]);;
    }
}