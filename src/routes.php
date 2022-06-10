<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/note', 'NotesController@add');
$router->post('/note', 'NotesController@addAction');
$router->get('/edit/{id}', 'NotesController@edit');
$router->post('/edit/{id}', 'NotesController@editAction');
$router->get('/excluir/{id}', 'NotesController@del');