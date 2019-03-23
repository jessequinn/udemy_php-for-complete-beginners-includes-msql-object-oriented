<?php

namespace Registration;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Admin\User;
use Slim\Router;
use Slim\Flash\Messages as FlashMessages;

final class RegistrationController
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

    public function registrationForm(Request $request, Response $response, $args)
    {
        return $this->view->render($response, 'registration/registration.html.twig',
            [
                'csrf' => [
                    'name' => $request->getAttribute('csrf_name'),
                    'value' => $request->getAttribute('csrf_value'),
                ],
                'error' => $this->flash->getFirstMessage('error'),
                'message' => $this->flash->getFirstMessage('message'),
            ]);
    }

    public function registerUser(Request $request, Response $response, $args)
    {
        if ($request->isPost()) {
            if ($request->getAttribute('csrf_status') === false) {
                $this->flash->addMessage('error', 'Error: CSRF form failure');
                $this->logger->error('Error: CSRF form failure');
            } else {
                $data = $request->getParsedBody();
                $user_check = User::where('user_username', $data['user_username'])->first();

                if (!empty($user_check)) {
                    $this->flash->addMessage('error',
                        'User exists.');
                } else {
                    $validator = User::getValidator($data);

                    if ($validator->validate()) {

                        $user_add = array(
                            'user_username' => $data['user_username'],
                            'user_password' => crypt($data['user_password'], getenv('RANDSALT')),
                            'user_firstname' => $data['user_firstname'],
                            'user_lastname' => $data['user_lastname'],
                            'user_email' => $data['user_email'],
                            'user_role' => $data['user_role'],
                        );

                        $user_create = User::create($user_add);

                        if (!$user_create->wasRecentlyCreated) {
                            $this->flash->addMessage('error', 'User was not created.');
                            return $response->withRedirect($this->router->pathFor('registration-form'));
                        } else {
                            // Clear any active session
//                            \RKA\Session::destroy();
                            // Create new session with new user
                            $session = new \RKA\Session();
                            $this->flash->addMessage('message',
                                $user_add['user_username'] . ' was created and automatically logged in.');

                            foreach ($user_add as $key => $value) {
                                $session->set($key, $value);
                            }

                            return $response->withRedirect($this->router->pathFor('blog-list-posts'));
                        }
                    } else {
                        $this->flash->addMessage('error', 'Field validation error.');
                    }
                }
            }
        }

        return $response->withRedirect($this->router->pathFor('registration-form'));
    }
}