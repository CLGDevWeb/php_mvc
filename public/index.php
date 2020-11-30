<?php

use Routes\Exceptions\NotFoundException;
use Routes\Router;

require '../vendor/autoload.php';

// constantes d'environnement
define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR );
define('APP_NAME', 'Pattern MVC' );
define('DB_NAME', 'php_poo' );
define('DB_HOST', '127.0.0.1' );
define('DB_USER', 'root' );
define('DB_PWD', '' );

$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\PostController@home');
$router->get('/posts', 'App\Controllers\PostController@index');
$router->get('/posts/:id', 'App\Controllers\PostController@show');
$router->get('/tags/:id', 'App\Controllers\TagController@show');

$router->get('/login', 'App\Controllers\UserController@login');
$router->post('/login', 'App\Controllers\UserController@store');
$router->get('/logout', 'App\Controllers\UserController@logout');

$router->get('/admin/posts', 'App\Controllers\Admin\PostController@index');
$router->get('/admin/posts/create', 'App\Controllers\Admin\PostController@create');
$router->post('/admin/posts/create', 'App\Controllers\Admin\PostController@store');
$router->post('/admin/posts/delete/:id', 'App\Controllers\Admin\PostController@destroy');
$router->get('/admin/posts/edit/:id', 'App\Controllers\Admin\PostController@edit');
$router->post('/admin/posts/edit/:id', 'App\Controllers\Admin\PostController@update');

try {
    $router->run();
} catch(NotFoundException $e) {
    return $e->error404(); 
}