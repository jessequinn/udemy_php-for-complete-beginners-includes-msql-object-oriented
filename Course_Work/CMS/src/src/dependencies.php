<?php
// DIC configuration
$container = $app->getContainer();

// Twig extension
// https://github.com/aptoma/twig-markdown
use Aptoma\Twig\Extension\MarkdownExtension;
use Aptoma\Twig\Extension\MarkdownEngine;
$engine = new MarkdownEngine\MichelfMarkdownEngine();

// View
$container['view'] = function ($c) {
    global $engine;
    $view = new \Slim\Views\Twig($c['settings']['view']['template_path'], $c['settings']['view']['twig']);
    // Add extensions
    $view->addExtension(new Slim\Views\TwigExtension($c['router'], $c['request']->getUri()));
//    $view->addExtension(new Twig_Extension_Debug());
//    $view->addExtension(new Bookshelf\TwigExtension($c['flash']));
    $view->addExtension(new MarkdownExtension($engine));
    return $view;
};

// CSRF guard
$container['csrf'] = function ($c) {
    $guard = new \Slim\Csrf\Guard();
    $guard->setFailureCallable(function ($request, $response, $next) {
        $request = $request->withAttribute("csrf_status", false);
        return $next($request, $response);
    });
    return $guard;
};

// Flash messages
$container['flash'] = function ($c) {
    return new \Slim\Flash\Messages;
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

// Database
$capsule = new Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function ($c) use ($capsule) {
    return $capsule;
};

// custom 404
//Override the default Not Found Handler after App
unset($container['notFoundHandler']);
$container['notFoundHandler'] = function ($c) {
    return function ($request, $response) use ($c) {
        $response = new \Slim\Http\Response(404);
        return $response->write("Page not found");
    };
};

unset($container['errorHandler']);
$container['errorHandler'] = function ($c) {
    return function ($request, $response, $exception) use ($c) {
        return $response->withStatus(500)
            ->withHeader('Content-Type', 'text/html')
            ->write('Something went wrong! ' . $exception);
    };
};

unset($container['phpErrorHandler']);
$container['phpErrorHandler'] = function ($c) {
    return function ($request, $response, $exception) use ($c) {
        return $response->withStatus(500)
            ->withHeader('Content-Type', 'text/html')
            ->write('Something went wrong! ' . $exception);
    };
};

// Eloquent - pass table object into a controller
$container[Admin\CategoryController::class] = function ($c) {
    $view = $c->get('view');
    $logger = $c->get('logger');
    $router = $c->get('router');
    $flash = $c->get('flash');
    return new \Admin\CategoryController($view, $logger, $router, $flash);
};

$container[Admin\PostController::class] = function ($c) {
    $view = $c->get('view');
    $logger = $c->get('logger');
    $router = $c->get('router');
    $flash = $c->get('flash');
    return new \Admin\PostController($view, $logger, $router, $flash);
};

$container[Admin\CommentController::class] = function ($c) {
    $view = $c->get('view');
    $logger = $c->get('logger');
    $router = $c->get('router');
    $flash = $c->get('flash');
    return new \Admin\CommentController($view, $logger, $router, $flash);
};

$container[Blog\BlogController::class] = function ($c) {
    $view = $c->get('view');
    $logger = $c->get('logger');
    $router = $c->get('router');
    $flash = $c->get('flash');
    return new \Blog\BlogController($view, $logger, $router, $flash);
};

$container[Admin\UserController::class] = function ($c) {
    $view = $c->get('view');
    $logger = $c->get('logger');
    $router = $c->get('router');
    $flash = $c->get('flash');
    return new \Admin\UserController($view, $logger, $router, $flash);
};

$container[Admin\DashboardController::class] = function ($c) {
    $view = $c->get('view');
    $logger = $c->get('logger');
    $router = $c->get('router');
    $flash = $c->get('flash');
    return new \Admin\DashboardController($view, $logger, $router, $flash);
};

$container[Login\LoginController::class] = function ($c) {
    $view = $c->get('view');
    $logger = $c->get('logger');
    $router = $c->get('router');
    $flash = $c->get('flash');
    return new \Login\LoginController($view, $logger, $router, $flash);
};

$container[Registration\RegistrationController::class] = function ($c) {
    $view = $c->get('view');
    $logger = $c->get('logger');
    $router = $c->get('router');
    $flash = $c->get('flash');
    return new \Registration\RegistrationController($view, $logger, $router, $flash);
};
