<?php
namespace src\controllers;

use \core\Controller;
use \src\Models\Lancamento;
//chamando a classe LoginHabdlers para ser usado nesse controller
use \src\Handlers\LoginHandlers;

class BuscaController extends Controller {
    //propriedade para armazenar o usuario logado
    private $logaUsuario;

    //verifica se o usuario está logado
    //verifica quem é o usuario logado
    public function __construct(){
        //se tiver um usuario logado este vai ser armazendado em $logaUsario
        $this->logaUsuario = LoginHandlers::checkLogin();
        //verificando o loginHandlers, caso dê problema é retornado false e este vai ser redirecionado para a pagina de login, caso dê certo é redirecioado para o index
        if($this->logaUsuario === false){
            $this->redirect('/loginUsuario');
        }
    }
    public function busca(){
        $search = filter_input(INPUT_GET,'search');
        $lancamentos = Lancamento::select()->where('tipo_lancamento','like',''.$search.'%')->orWhere('pessoa','like',''.$search.'%')->get(); 
        $this->render('listaLancamento',[ 'lancamentos'=>$lancamentos]);
    }
}
