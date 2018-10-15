<?php
// src/Controller/ItemController.php
namespace Controller;

use Model\Item;
use Model\ItemManager;
class ItemController extends AbstractController
{



    public function index()
    {
        $itemManager = new ItemManager($this->pdo);
        $items = $itemManager->selectAll() ;
        return $this->twig->render('Item/item.html.twig', ['items' => $items]);
    }
    public function show(int $id)
    {
        $itemManager = new ItemManager($this->pdo);
        $item = $itemManager->selectOneById($id);

        return $this->twig->render('Item/show.html.twig', ['items' => $item]) ;
    }

    /**
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function add()
    {

        $error = '';
        if (!empty($_POST)) {
            if (isset($_POST['item']) && !empty($_POST['item'])) {
                // création d'un nouvel objet Item et hydratation avec les données du formulaire
                $item = new Item();
                $item->setTitle($_POST['item']);
                $itemManager = new ItemManager($this->pdo);
                // l'objet $item hydraté est simplement envoyé en paramètre de insert()
                $itemManager->insert($item);
                // si tout se passe bien, redirection
                header('Location: /');
                exit();
            } else {
                $error = "The item's name is required.";
            }
        }
            return $this->twig->render('Item/add.html.twig', ['error' => $error]);
    }




    public function edit(int $id): string
    {
        $itemManager = new ItemManager($this->getPdo());
        $item = $itemManager->selectOneById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!empty($_POST)) {
                if (isset($_POST['id']) && !empty($_POST['id'])) {
                    if (isset($_POST['item']) && !empty($_POST['item'])) {
                        $item->setTitle($_POST['item']);
                        $itemManager->update($item);
                        header('Location: /item/'.intval($_POST['id']));
                        exit();
                    } else {
                        $error = "The new item's name is required";
                    }
                } else {
                    $error = 'Error was found. Please try again.';
                }
            }
            return $this->twig->render('Item/edit.html.twig', [
                'error' => $error,
                'item' => $item
            ]);
        }

        return $this->twig->render('Item/edit.html.twig', ['item' => $item]);
    }
    public function delete(int $id)
    {
        $itemManager = new ItemManager($this->getPdo());
        $itemManager->delete($id);
        header('Location:/');
    }
}


