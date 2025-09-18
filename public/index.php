<?php
session_start();
require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;

$router = new Router();

$router->get('/', 'AuthController@loginForm');
$router->post('/login', 'AuthController@login');
$router->get('/register', 'AuthController@registerForm');
$router->post('/register', 'AuthController@register');
$router->get('/logout', 'AuthController@logout');

$router->get('/contactos', 'ContactoController@index');
$router->get('/contactos/crear', 'ContactoController@crear');
$router->post('/contactos/guardar', 'ContactoController@guardar');
$router->get('/contactos/editar', 'ContactoController@editar');
$router->post('/contactos/actualizar', 'ContactoController@actualizar');
$router->post('/contactos/eliminar', 'ContactoController@eliminar');

$router->run();
