<?php
// Application middleware

$app->add($app->getContainer()->get('csrf'));

// $c is the DI container of Slim
$app->add(function ($request, $response, $next) use ($container) {
    // First execute anything else
    $response = $next($request, $response);

    // Check if the response should render a 404
    if (404 === $response->getStatusCode() &&
        0   === $response->getBody()->getSize()
    ) {
        // A 404 should be invoked
        $handler = $container['notFoundHandler'];
        return $handler($request, $response);
    }

    // Any other request, pass on current response
    return $response;
});

$app->add(new \RKA\SessionMiddleware(['name' => 'MySessionName']));
