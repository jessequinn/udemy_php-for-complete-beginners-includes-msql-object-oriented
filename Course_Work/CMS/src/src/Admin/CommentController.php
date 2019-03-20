<?php

namespace Admin;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Admin\Post;
use Admin\Category;
use Admin\Comment;
use Slim\Router;
use Slim\Flash\Messages as FlashMessages;

final class CommentController
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

    public function listComments(Request $request, Response $response, $args)
    {
        $session = new \RKA\Session();
        return $this->view->render($response, 'admin/admin_comments.html.twig', [
            'comments' => Comment::orderBy('comment_id', 'desc')->get(),
            'posts' => Post::all(),
            'categories' => Category::all(),
            'session' => $session,
        ]);
    }

    public function deleteComment(Request $request, Response $response, $args)
    {
        if (isset($args['id'])) {
            $comment_delete = Comment::find($args['id']);

            if ($comment_delete) {
                Comment::destroy($args['id']);

                // decrement post_comment_count
                $post_edit = Post::find($comment_delete['comment_post_id']);
                $post_edit->post_comment_count -= 1;
                $post_edit->save();
            } else {
                $this->logger->info('Error: could not delete comment');
                $this->flash->addMessage('error', 'Error: could not delete comment');
            }
        }

        return $response->withRedirect($this->router->pathFor('admin-list-comments'));
    }

    public function approveComment(Request $request, Response $response, $args)
    {
        if (isset($args['id'])) {
            $comment_approve = Comment::find($args['id']);
            $comment_approve->comment_status = 'Approved';
            $comment_approve->save();
        }

        return $response->withRedirect($this->router->pathFor('admin-list-comments'));
    }

    public function unapproveComment(Request $request, Response $response, $args)
    {
        if (isset($args['id'])) {
            $comment_unapprove = Comment::find($args['id']);
            $comment_unapprove->comment_status = 'Unapproved';
            $comment_unapprove->save();
        }

        return $response->withRedirect($this->router->pathFor('admin-list-comments'));
    }

    public function editCommentForm(Request $request, Response $response, $args)
    {
        if (isset($args['id'])) {
            $comment_data = Comment::find($args['id']);

            if ($comment_data) {
                return $this->view->render($response, 'admin/admin_edit_comment.html.twig',
                    [
                        'comment_data' => $comment_data,
                        'csrf' => [
                            'name' => $request->getAttribute('csrf_name'),
                            'value' => $request->getAttribute('csrf_value'),
                        ],
                        'error' => $this->flash->getFirstMessage('error'),
                    ]);
            }
        }

        return $response->withRedirect($this->router->pathFor('admin-list-comments'));
    }

    public function editComment(Request $request, Response $response, $args)
    {
        if ($request->isPost()) {
            $data = $request->getParsedBody();
            $validator = Comment::getValidator($data);

            if ($validator->validate()) {
                $comment_edit = Comment::find($data['comment_id']);

                if ($comment_edit) {
                    $comment_edit->comment_author = $data['comment_author'];
                    $comment_edit->comment_email = $data['comment_email'];
                    $comment_edit->comment_content = $data['comment_content'];
                    $comment_edit->save();
                }
            } else {
                $this->logger->error("Error: could not validate inputs");
                $this->flash->addMessage('error', 'Error: could not validate inputs');
                return $response->withRedirect($this->router->pathFor('admin-edit-comment-form',
                    [
                        'id' => $data['comment_id'],
                    ]));
            }
        }
        return $response->withRedirect($this->router->pathFor('admin-list-comments'));
    }
}