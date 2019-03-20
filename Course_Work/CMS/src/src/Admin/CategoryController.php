<?php

namespace Admin;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Admin\Category as Category;
use Slim\Flash\Messages as FlashMessages;
use Slim\Router;

final class CategoryController
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

    public function listCategories(Request $request, Response $response, $args)
    {
        $session = new \RKA\Session();
        return $this->view->render($response, 'admin/admin_categories.html.twig', [
            'categories' => Category::orderBy('cat_title', 'asc')->get(),
            'session' => $session,
        ]);
    }

    public function deleteCategory(Request $request, Response $response, $args)
    {
        if (isset($args['id'])) {
            $category = Category::find($args['id']);

            if ($category) {
                Category::destroy($args['id']);
            }
        }

        return $response->withRedirect($this->router->pathFor('admin-list-categories'));
    }

    public function editCategory(Request $request, Response $response, $args)
    {
        $category_edit = null;

        if (isset($args['id'])) {
            $category_edit = Category::find($args['id']);
        }

        return $this->view->render($response, 'admin/admin_categories.html.twig', [
            'categories' => Category::orderBy('cat_title', 'asc')->get(),
            'category_edit' => $category_edit,
        ]);
    }

    public function addUpdateCategory(Request $request, Response $response, $args)
    {
        if ($request->isPost()) {
            $data = $request->getParsedBody();
            $validator = Category::getValidator($data);

            if ($validator->validate()) {
                if (!empty($data['cat_id'])) {
                    $category_edit = Category::find($data['cat_id']);

                    if ($category_edit) {
                        $category_edit->cat_title = $data['cat_title'];
                        $category_edit->save();
                    }
                } else {
                    $categoryDate = array('cat_title' => $data['cat_title']);
                    Category::firstOrCreate($categoryDate);
                }
            }

            return $response->withRedirect($this->router->pathFor('admin-list-categories'));
        }
    }
}