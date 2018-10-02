<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 02/10/18
 * Time: 10:53
 */
$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
    ],

    'Category' => [
        ['index', '/category', 'GET'],
        ['show', 'category/{id}', 'GET'],
    ],

];