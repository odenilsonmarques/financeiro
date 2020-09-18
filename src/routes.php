<?php
use core\Router;

$router = new Router();

//$router->get('/loginUsuario', 'LoginController@login');
//$router->post('/loginUsuario', 'LoginController@loginAction');

//$router->get('/registroUsuario', 'LoginController@registro');
//$router->post('/registroUsuario', 'LoginController@registroAction');

$router->get('/','HomeController@index');

$router->get('/listaLancamento','LancamentoController@lista');

//$router->get('/pdf','PdfController@exibePdf');

$router->get('/adicionaLancamento','LancamentoController@adiciona');
$router->post('/adicionaLancamento','LancamentoController@adicionaAction');

$router->get('/editaLancamento/{id}','LancamentoController@edita');
$router->post('/editaLancamento/{id}','LancamentoController@editaAction');

$router->get('/deletaLancamento/{id}','LancamentoController@deleta');

//$router->get('/sair','LoginController@logout');

$router->get('/listaLancamento','BuscaController@busca');
