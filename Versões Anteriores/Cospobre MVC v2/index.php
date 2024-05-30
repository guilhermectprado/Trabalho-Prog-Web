<?php
error_reporting(E_ERROR | E_PARSE);
error_reporting(E_ALL ^ E_WARNING);

include 'app/Database.php';
define('BASEPATH', "/Cospobre MVC/");
/*Database::createSchema();*/

/**
 * Usa de uma lib de rotas externa
 */
include 'libs/Route.php';

use Steampixel\Route;

/**
* Cria uma instância do controlador para uso
*/


include_once('app/controller/loginC.php');

$controller = new loginC();


Route::add('/login', fn () => $controller->loginIndex(), ['get']);
Route::add('/register', fn () => $controller->cadastrarIndex() , ['get']);
Route::add('/home', fn () => $controller->home(), ['get']);
Route::add('/acessories', fn () => $controller->acessories(), ['get']);
Route::add('/wigs', fn () => $controller->peruquitas(), ['get']);

Route::add('/login', fn () => $controller->login() , ['post']);
Route::add('/register', fn () => $controller->cadastrar() , ['post']);
Route::add('/logout', fn () => $controller->sair() , ['post']);

Route::add('/', function () {
    header('Location: ' . BASEPATH . 'paginaprincipal');
}, ['get']);


Route::add('/.*', function () {
    http_response_code(404);
    echo "Page not found!";
}, ['get']);


// Inicia o router
Route::run(BASEPATH);