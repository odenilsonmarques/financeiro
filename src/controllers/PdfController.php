<?php
namespace src\controllers;
use \core\Controller;
use \src\models\Lancamento;
//use PDF;

//chamando a classe LoginHabdlers para ser usado nesse controller
use \src\Handlers\LoginHandlers;

class PdfController extends Controller{

    //verifica se o usuario está logado
     //verifica quem é o usuario logado

     /*
     public function __construct(){
        //se tiver um usuario logado este vai ser armazendado em $logaUsario
        $this->logaUsuario = LoginHandlers::checkLogin();
        //verificando o loginHandlers, caso dê problema é retornado false e este vai ser redirecionado para a pagina de login, caso dê certo é redirecioado para o index
        if($this->logaUsuario === false){
            $this->redirect('/loginUsuario');
        }
    }
    */

    public function exibePdf(){
        $lancamentos = Lancamento::select()->execute();
        //$dados = PDF::loadView('pdf',compact('lancamentos'));
       // $this->render($lancamentos->setPaper('a4')->stream('lancamentos.pdf'));
       // $this->render('pdf',['lancamentos'=>$lancamentos('lancamentos.pdf')]); 
        $this->render('pdf',['lancamentos'=>$lancamentos]); 
    }
}