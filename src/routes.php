<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/novo', 'UsuariosController@add');  /// esse vai para a página de adiconar novo usuário;
$router->post('/novo', 'UsuariosController@addAction');  /// esse é quando der o submit no formulário na página /novo,aí ele irá para esse de POST, que é o addAction;

$router->get('/usuario/{id}/editar', 'UsuariosController@edit');
$router->post('/usuario/{id}/editar', 'UsuariosController@editAction');

$router->get('/usuario/{id}/excluir', 'UsuariosController@deletar');
