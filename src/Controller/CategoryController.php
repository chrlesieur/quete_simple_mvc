<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 02/10/18
 * Time: 12:54
 */

namespace Controller;
use Model\CategoryManager;
use Twig_Loader_Filesystem;
use Twig_Environment;

class CategoryController
{
    private $twig;

    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
        $this->twig = new Twig_Environment($loader);
    }
    public function index()
    {
        $CategoriesManager = new CategoryManager();
        $categories = $CategoriesManager->selectAllCategories();
        return $this->twig->render('Category/category.html.twig', ['categories' => $categories]);
    }
    public function show(int $id)
    {
        $CategoryManager = new CategoryManager();
        $category = $CategoryManager->selectOneCategory($id);
        return $this->twig->render('Category/showCategory.html.twig', ['category' => $category]);

    }

}