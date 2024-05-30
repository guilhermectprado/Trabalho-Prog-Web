<?php
error_reporting(E_ERROR | E_PARSE);
error_reporting(E_ALL ^ E_WARNING);

define('BASEPATH', "/Cospobre MVC/");
/*Database::createSchema();*/

/**
 * Usa de uma lib de rotas externa
 */

include_once __DIR__ . '/app/Database.php';

include_once __DIR__ .'/app/controller/userController.php' ;
include_once __DIR__ . '/app/model/Usuario.php';
include_once __DIR__ . '/libs/Route.php';

use App\Database;

use Steampixel\Route;

/**
* Cria uma instância do controlador para uso
*/


$controller = new userController();


Route::add('/login', fn () => $controller->loginIndex(), ['get']);
Route::add('/register', fn () => $controller->cadastrarIndex() , ['get']);
Route::add('/home', fn () => $controller->home(), ['get']);
Route::add('/acessories', fn () => $controller->acessories(), ['get']);
Route::add('/wigs', fn () => $controller->peruquitas(), ['get']);

Route::add('/login', fn () => $controller->login() , ['post']);
Route::add('/register', fn () => $controller->cadastrar() , ['post']);
Route::add('/logout', fn () => $controller->sair() , ['post']);

Route::add('', function () {
    header('Location:' . BASEPATH . 'home');
}, ['get']);


Route::add('/.*', function () {
    http_response_code(404);
    echo "Page not found!";
}, ['get']);


// Inicia o router
Route::run(BASEPATH);