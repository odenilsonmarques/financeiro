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
    public function index(){
        
        $lancamentos = Lancamento::select()->execute();

        $receitaLancamento = Lancamento::select()->where('tipo_lancamento', '=', 'receita')->sum('valor');

        $despesaLancamento = Lancamento::select()->where('tipo_lancamento', '=', 'Despesa')->sum('valor');

        $saldoLancamento = Lancamento::select()->where('tipo_lancamento', '=', 'receita')->sum('valor') - Lancamento::select()->where('tipo_lancamento', '=', 'Despesa')->sum('valor');


       //$saldoLancamento = Lancamento::select()->SUM("CASE WHEN tipo_lancamento = 'receita','THEN', valor, 'WHEN', tipo_lancamento = 'despesa', 'THEN', -valor ELSE 0 END");
        
        $this->render('home',['saldoLancamento'=>$saldoLancamento,'lancamentos'=>$lancamentos,'despesaLancamento'=>$despesaLancamento,'receitaLancamento'=>$receitaLancamento]);  
    }
}
