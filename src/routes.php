<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/listaLancamento','LancamentoController@lista');

$router->get('/adicionaLancamento','LancamentoController@adiciona');