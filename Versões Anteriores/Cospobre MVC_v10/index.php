<?php
error_reporting(E_ERROR | E_PARSE);
error_reporting(E_ALL ^ E_WARNING);

define('BASEPATH', "/Cospobre MVC/");


/**
 * Usa de uma lib de rotas externa
 */

include_once __DIR__ . '/app/Database.php';
include_once __DIR__ . '/app/controller/Controlador.php';
include_once __DIR__ .'/app/controller/userController.php' ;
include_once __DIR__ .'/app/controller/produtoController.php' ;
include_once __DIR__ .'/app/controller/carrinhoController.php' ;
include_once __DIR__ . '/app/model/Usuario.php';
include_once __DIR__ . '/app/model/Produto.php';
include_once __DIR__ . '/app/model/Carrinho.php';
include_once __DIR__ . '/libs/Route.php';

use App\Database;
use App\Controller\userController;
use App\Controller\produtoController;
use App\Controller\carrinhoController;
use Steampixel\Route;


Database::createSchema();
/**
* Cria uma instância de cada controlador para uso
*/


$controller = new userController(); /** controlador do usuario */
$controllerProdutos = new produtoController(); /** controlador do produto */
$controllerCarrinho = new carrinhoController();/** controlador do carrinho */


Route::add('/login', fn () => $controller->loginIndex(), ['get']); 
Route::add('/register', fn () => $controller->cadastrarIndex() , ['get']);
Route::add('/info', fn () => $controller->info(), ['get']);
Route::add('/home', fn () => $controller->home(), ['get']);
Route::add('/list', fn () => $controller->lista(), ['get']);
Route::add('/login', fn () => $controller->login() , ['post']);
Route::add('/register', fn () => $controller->cadastrar() , ['post']);
Route::add('/logout', fn () => $controller->sair() , ['get']);

Route::add('/busca', fn () => $controllerProdutos->busca(), ['get']);
Route::add('/acessories', fn () => $controllerProdutos->acessories(), ['get']);
Route::add('/wigs', fn () => $controllerProdutos->peruquitas(), ['get']);
Route::add('/description', fn () => $controllerProdutos->descricao(), ['get']);
Route::add('/listProdutos', fn () => $controllerProdutos->lista(), ['get']);
Route::add('/conjuntos', fn () => $controllerProdutos->conjuntinhos(), ['get']);
Route::add('/sapatos', fn () => $controllerProdutos->sapatitos(), ['get']);



Route::add('/chart/added', fn () => $controllerCarrinho->chart(), ['get']);
Route::add('/chart', fn () => $controllerCarrinho->carrineo(), ['get']);
Route::add('/pay', fn () => $controllerCarrinho->cartao(), ['get']);
Route::add('/pay/credit/success', fn () => $controllerCarrinho->sucessoCredito(), ['get']);
Route::add('/pay/debit/success', fn () => $controllerCarrinho->sucessoDebito(), ['get']);




Route::add('', function () {
    header('Location:' . BASEPATH . 'home');
}, ['get']);


Route::add('/.*', function () {
    http_response_code(404);
    echo "Page not found!";
}, ['get']);


// Inicia o router
Route::run(BASEPATH);