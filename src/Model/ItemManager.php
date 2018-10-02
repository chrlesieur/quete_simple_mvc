<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 29/09/18
 * Time: 16:20
 */
namespace Model;
require __DIR__ . '/../../app/db.php';
class ItemManager
{


    public function selectAllItems(): array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM item";
        $res = $pdo->query($query);
        return $res->fetchAll();
    }
}