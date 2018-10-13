<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 02/10/18
 * Time: 12:54
 */

namespace Controller;
use Model\CategoryManager;


class CategoryController extends AbstractController
{



    public function index()
    {
        $CategoriesManager = new CategoryManager($this->pdo);
        $categories = $CategoriesManager->selectAll();
        return $this->twig->render('Category/category.html.twig', ['categories' => $categories]);
    }
    public function show(int $id)
    {
        $CategoryManager = new CategoryManager($this->pdo);
        $category = $CategoryManager->selectOneById($id);
        return $this->twig->render('Category/showCategory.html.twig', ['category' => $category]);

    }

}