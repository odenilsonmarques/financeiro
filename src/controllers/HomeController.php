<?php
namespace src\controllers;

use \core\Controller;
use \src\Models\Lancamento;
//chamando a classe LoginHabdlers para ser usado nesse controller
use \src\Handlers\LoginHandlers;

class HomeController extends Controller {
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
    public function index(){
        
        $lancamentos = Lancamento::select()->execute();

        $somaLancamento = Lancamento::select()->sum('valor');

        $receitaLancamento = Lancamento::select()->where('tipo_lancamento', '=', 'Receita')->sum('valor');

        $despesaLancamento = Lancamento::select()->where('tipo_lancamento', '=', 'Despesa')->sum('valor');

        $this->render('home',['logaUsuario'=>$this->logaUsuario,'lancamentos'=>$lancamentos,'somaLancamento'=>$somaLancamento,'despesaLancamento'=>$despesaLancamento,'receitaLancamento'=>$receitaLancamento]);  
    }
}
