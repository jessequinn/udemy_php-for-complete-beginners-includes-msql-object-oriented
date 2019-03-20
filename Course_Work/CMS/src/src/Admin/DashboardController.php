<?php

namespace Admin;

use Slim\Flash\Messages as FlashMessages;
use Slim\Router;
use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Admin\User;
use Admin\Category;
use Admin\Post;
use Admin\Comment;


final class DashboardController
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

    public function index(Request $request, Response $response, $args)
    {
        $session = new \RKA\Session();

        if ($session->user_role == 'Admin') {
            return $this->view->render($response, 'admin/admin_index.html.twig', [
                'category_count' => Category::get()->count(),
                'post_count' => Post::get()->count(),
                'comment_count' => Comment::get()->count(),
                'user_count' => User::get()->count(),
                'session' => $session,
            ]);
        }

        $this->flash->addMessage('message',
            'Message: ' . $session->user_username . ' is logged in');
        $this->flash->addMessage('error',
            'Error: ' . $session->user_username . ' is not an admin');
        return $response->withRedirect($this->router->pathFor('blog-list-posts'));
    }
}