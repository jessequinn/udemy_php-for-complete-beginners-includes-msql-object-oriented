<?php

namespace Login;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Admin\User;
use Slim\Router;
use Slim\Flash\Messages as FlashMessages;

final class LoginController
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

    public function loginForm(Request $request, Response $response, $args)
    {
        return $this->view->render($response, 'login/login.html.twig',
            [
                'csrf' => [
                    'name' => $request->getAttribute('csrf_name'),
                    'value' => $request->getAttribute('csrf_value'),
                ]
            ]);
    }

    public function loginUser(Request $request, Response $response, $args)
    {
        if ($request->isPost()) {
            if ($request->getAttribute('csrf_status') === false) {
                $this->flash->addMessage('error', 'Error: CSRF form failure');
                $this->logger->error('Error: CSRF form failure');
            } else {
                $data = $request->getParsedBody();
                $user_data = User::where('user_username', $data['user_username'])->first();

                if (!empty($user_data)) {
                    /* user login here */
                    if ($user_data['user_username'] == $data['user_username']
                        and $user_data['user_password'] == $data['user_password']) {
                        // start session
                        $session = new \RKA\Session();
                        $this->flash->addMessage('message',
                            'Message: ' . $user_data['user_username'] . ' is logged in');

                        foreach ($user_data->toArray() as $key => $value) {
                            $session->set($key, $value);
                        }

                        if ($user_data['user_role'] == 'Admin') {
                            return $response->withRedirect($this->router->pathFor('admin-index'));
                        } else {
                            $this->flash->addMessage('message',
                                'Message: ' . $user_data['user_username'] . ' is logged in');
                        }
                    } else {
                        $this->flash->addMessage('error',
                            'Error: wrong password given');
                    }
                } else {
                    $this->logger->info('Error: could not log in');
                    $this->flash->addMessage('error',
                        'Error: username does not exist');
                }

                return $response->withRedirect($this->router->pathFor('blog-list-posts'));
            }
        }

        return $response->withRedirect($this->router->pathFor('login-form'));
    }

    public function logoutUser(Request $request, Response $response, $args)
    {
        \RKA\Session::destroy();
        return $response->withRedirect($this->router->pathFor('blog-list-posts'));
    }

}