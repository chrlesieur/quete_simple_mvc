<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 10/10/18
 * Time: 10:20
 */

namespace Model;


class Category
{
    private $id;
    private $name;

    /**
     * @return mixed
     */
    public function getId():int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): Category
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName():string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): Category
    {
        $this->name = $name;
    }
}