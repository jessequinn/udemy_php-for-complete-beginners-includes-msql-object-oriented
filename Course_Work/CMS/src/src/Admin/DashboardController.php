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
                'published_post_count' => Post::where('post_status','Published')->get()->count(),
                'draft_post_count' => Post::where('post_status','Draft')->get()->count(),
                'approved_comment_count' => Comment::where('comment_status','Approved')->get()->count(),
                'unapproved_comment_count' => Comment::where('comment_status','Unapproved')->get()->count(),
                'admin_user_count' => User::where('user_role','Admin')->get()->count(),
                'subscriber_user_count' => User::where('user_role','Subscriber')->get()->count(),
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