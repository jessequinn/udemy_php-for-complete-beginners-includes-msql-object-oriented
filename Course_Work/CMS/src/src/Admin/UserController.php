<?php

namespace Admin;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Router;
use Slim\Flash\Messages as FlashMessages;

final class UserController
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

    public function listUsers(Request $request, Response $response, $args)
    {
        $session = new \RKA\Session();
        return $this->view->render($response, 'admin/admin_users.html.twig', [
            'users' => User::orderBy('user_id', 'desc')->get(),
            'message' => $this->flash->getFirstMessage('message'),
            'session' => $session,
        ]);
    }

    public function addUserForm(Request $request, Response $response, $args)
    {
        $session = new \RKA\Session();
        return $this->view->render($response, 'admin/admin_add_user.html.twig',
            [
                'csrf' => [
                    'name' => $request->getAttribute('csrf_name'),
                    'value' => $request->getAttribute('csrf_value'),
                ],
                'error' => $this->flash->getFirstMessage('error'),
                'session' => $session,
            ]);
    }

    public function editUserForm(Request $request, Response $response, $args)
    {
        if (isset($args['id'])) {
            $user_data = User::find($args['id']);

            if ($user_data) {
                $session = new \RKA\Session();

                return $this->view->render($response, 'admin/admin_edit_user.html.twig',
                    [
                        'user_data' => $user_data,
                        'csrf' => [
                            'name' => $request->getAttribute('csrf_name'),
                            'value' => $request->getAttribute('csrf_value'),
                        ],
                        'error' => $this->flash->getFirstMessage('error'),
                        'message' => $this->flash->getFirstMessage('message'),
                        'session' => $session,
                    ]);
            }
        }

        return $response->withRedirect($this->router->pathFor('admin-list-users'));
    }

    public function deleteUser(Request $request, Response $response, $args)
    {
        if (isset($args['id'])) {
            $user_delete = User::find($args['id']);

            if ($user_delete) {
                User::destroy($args['id']);
            }
        }
        return $response->withRedirect($this->router->pathFor('admin-list-users'));
    }

    public function addUser(Request $request, Response $response, $args)
    {
        if ($request->isPost()) {
            $data = $request->getParsedBody();
            $validator = User::getValidator($data);

            if ($validator->validate()) {
                $user_add = array(
                    'user_username' => $data['user_username'],
                    'user_password' => $data['user_password'],
                    'user_firstname' => $data['user_firstname'],
                    'user_lastname' => $data['user_lastname'],
                    'user_email' => $data['user_email'],
                    'user_image' => '',
                    'user_role' => $data['user_role'],
                    'randSalt' => '',
                );
                $user_create = User::firstOrCreate([
                    'user_username' => $user_add['user_username'],
                ],
                    $user_add
                );

                if (!$user_create->wasRecentlyCreated) {
                    $this->logger->error("Error: duplicate username");
                    $this->flash->addMessage('error', 'Error: duplicate username');
                    return $response->withRedirect($this->router->pathFor('admin-add-user-form'));
                } else {
                    $this->flash->addMessage('message', 'Message: user has been created');
                    return $response->withRedirect($this->router->pathFor('admin-list-users'));

                }
            } else {
                $this->logger->error("Error: could not validate inputs");
                $this->flash->addMessage('error', 'Error: could not validate inputs');
                return $response->withRedirect($this->router->pathFor('admin-add-user-form'));
            }

            return $response->withRedirect($this->router->pathFor('admin-list-users'));
        }
    }

    public function editUser(Request $request, Response $response, $args)
    {
        if ($request->isPost()) {
            $data = $request->getParsedBody();
            $validator = User::getValidator($data);

            if ($validator->validate()) {
                $user_edit = User::find($data['user_id']);

                if ($user_edit) {
                    $user_edit->user_username = $data['user_username'];
                    $user_edit->user_password = $data['user_password'];
                    $user_edit->user_firstname = $data['user_firstname'];
                    $user_edit->user_lastname = $data['user_lastname'];
                    $user_edit->user_email = $data['user_email'];
                    $user_edit->user_role = $data['user_role'];
                    $user_edit->save();
                }
            } else {
                $this->logger->error("Error: could not validate inputs");
                $this->flash->addMessage('error', 'Error: could not validate inputs');
                return $response->withRedirect($this->router->pathFor('admin-edit-user-form',
                    [
                        'id' => $data['user_id'],
                    ]));
            }
        }

        return $response->withRedirect($this->router->pathFor('admin-list-users'));
    }

    public function approveUser(Request $request, Response $response, $args)
    {
        if (isset($args['id'])) {
            $user_approve = User::find($args['id']);
            $user_approve->user_role = 'Admin';
            $user_approve->save();
        }

        return $response->withRedirect($this->router->pathFor('admin-list-users'));
    }

    public function unapproveUser(Request $request, Response $response, $args)
    {
        if (isset($args['id'])) {
            $user_unapprove = User::find($args['id']);
            $user_unapprove->user_role = 'Subscriber';
            $user_unapprove->save();
        }

        return $response->withRedirect($this->router->pathFor('admin-list-users'));
    }
}