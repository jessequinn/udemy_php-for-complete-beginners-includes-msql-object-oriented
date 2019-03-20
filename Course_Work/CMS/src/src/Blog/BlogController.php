<?php

namespace Blog;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Admin\Post;
use Admin\Category;
use Admin\Comment;
use Slim\Router;
use Slim\Flash\Messages as FlashMessages;

final class BlogController
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

        return $this->view->render($response, 'blog/blog_index.html.twig', [
            'posts' => Post::all(),
            'categories' => Category::all(),
            'message' => $this->flash->getFirstMessage('message'),
            'error' => $this->flash->getFirstMessage('error'),
            'session' => $session,
        ]);
    }

    public function listPost(Request $request, Response $response, $args)
    {
        $post_show = null;
        $comments_show = null;

        if (isset($args['id'])) {
            $post_show = Post::find($args['id']);
            $comments_show = Comment::where('comment_post_id',
                $args['id'])->orderBy('comment_id', 'desc')->get();
        }

        $response = $this->view->render($response, 'blog/blog_post.html.twig', [
            'comments_show' => $comments_show,
            'post_show' => $post_show,
            'csrf' => [
                'name' => $request->getAttribute('csrf_name'),
                'value' => $request->getAttribute('csrf_value'),
            ],
        ]);

        return $response;
    }

    public function addComment(Request $request, Response $response, $args)
    {
        $post_show = null;
        $comments_show = null;
        $post_id = $args['id'];
        $this->logger->info("post id: " . $post_id);

        if ($request->isPost()) {
            if ($request->getAttribute('csrf_status') === false) {
                $errors['form'] = 'CSRF form failure'; // TODO: pass errors to twig
                $this->logger->error($errors['form']);
            } else {
                $data = $request->getParsedBody();
                $validator = Comment::getValidator($data);

                if ($validator->validate()) {
                    $commentData = array(
                        'comment_post_id' => $post_id,
                        'comment_author' => $data['comment_author'],
                        'comment_email' => $data['comment_email'],
                        'comment_content' => $data['comment_content'],
                        'comment_status' => 'Unapproved',
                        'comment_date' => date('y-m-d'),
                    );

                    Comment::create($commentData);

                    // increment post_comment_count
                    $post_edit = Post::find($post_id);
                    $post_edit->post_comment_count += 1;
                    $post_edit->save();

                    return $response->withRedirect($this->router->pathFor('blog-list-post',
                        [
                            'id' => $post_id,
                        ]));
                } else {
                    // TODO: need flash message here
                    $this->logger->error("Did not pass validation");
                    $errors = $validator->errors(); // TODO: pass errors to twig
                }
            }
        }

        return $response->withRedirect($this->router->pathFor('blog-list-post',
            [
                'id' => $post_id,
            ]));
    }
}