<?php

require __DIR__ . '/../vendor/autoload.php';
use Controller\ItemController;

$item = new Controller\ItemController;
$item->index();
?>