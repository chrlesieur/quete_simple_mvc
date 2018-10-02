<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 02/10/18
 * Time: 12:54
 */

namespace Controller;
use Model\CategoryManager;

class CategoryController
{

    public function index()
    {
        $CategoryManager = new CategoryManager();
        $categories = $CategoryManager->selectAllCategory();
        require __DIR__ . '/../View/category.php';
    }
    public function show(int $id)
    {
        $CategoryManager = new CategoryManager();
        $category = $CategoryManager->selectOneCategory($id);

        require __DIR__ . '/../View/showCategory.php';
    }

}