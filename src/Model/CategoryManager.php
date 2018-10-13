<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 02/10/18
 * Time: 11:37
 */

namespace Model;



class CategoryManager extends AbstractManager
{
    public function selectAllCategories(): array
    {

        $query = "SELECT * FROM category";
        $res = $pdo->query($query, Category::class);
        return $res->fetchAll();
    }
    public function selectOneCategory(int $id) : array
    {

        $query = "SELECT * FROM category WHERE id = :id";
        $statement = $pdo->prepare($query, Category::class);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        // contrairement à fetchAll(), fetch() ne renvoie qu'un seul résultat
        return $statement->fetch();
    }
}