<?php
namespace src\controllers;
use \core\Controller;

class LancamentoController extends Controller{

    public function lista(){
        $this->render('listaLancamento');
    }

    public function adiciona(){
        $this->render('adicionaLancamento');
    }
}