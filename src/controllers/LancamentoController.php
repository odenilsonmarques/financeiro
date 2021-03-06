<?php
namespace src\controllers;
use \core\Controller;
use \src\models\Lancamento;
use \src\models\Usuario;

//chamando a classe LoginHabdlers para ser usado nesse controller
use \src\Handlers\LoginHandlers;

class LancamentoController extends Controller{
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

    public function lista(){
        $lancamentos = Lancamento::select()->execute();
        $this->render('listaLancamento',['lancamentos'=>$lancamentos]); 
    }
    
    public function adiciona(){
        //$this->render('adicionaLancamento',['logaUsuario'=>$this->logaUsuario]);
        $this->render('adicionaLancamento');
    }
    public function adicionaAction(){
        //recebendo os dados
        $tipo_lancamento = filter_input(INPUT_POST,'tipo_lancamento');
        $pessoa = filter_input(INPUT_POST,'pessoa');
        $descricao = filter_input(INPUT_POST,'descricao');
        $valor = filter_input(INPUT_POST,'valor');
        $data_vencimento = filter_input(INPUT_POST,'data_vencimento');
        $situacao = filter_input(INPUT_POST,'situacao');
        $data_pagamento = filter_input(INPUT_POST,'data_pagamento');
       
        //verificando se os dados foram passados
        if($tipo_lancamento && $pessoa && $descricao && $valor && $data_vencimento && $situacao){
            if($situacao === 'Pendente'){
                Lancamento::insert([
                    'tipo_lancamento'=> $tipo_lancamento,
                    'pessoa'=>$pessoa,
                    'descricao'=>$descricao,
                    'valor'=>$valor,
                    'data_vencimento'=>$data_vencimento,
                    'situacao'=>$situacao,
                ])
                ->execute();
                $this->redirect('/listaLancamento');
            }else{
                Lancamento::insert([
                    'tipo_lancamento'=> $tipo_lancamento,
                    'pessoa'=>$pessoa,
                    'descricao'=>$descricao,
                    'valor'=>$valor,
                    'data_vencimento'=>$data_vencimento,
                    'situacao'=>$situacao,
                    'data_pagamento'=>$data_pagamento,
                ])
                ->execute();
                $this->redirect('/listaLancamento');
            }
        }
    }
    public function edita($id){
        //a variavel $idFin poderia ter nome, não precisa ser igual ao nome declarado na tabela, essa é a forma que acho melhor 
        $lancamento = Lancamento::select()->find($id['id']);
        $this->render('editaLancamento',['lancamento'=>$lancamento]);
    }

    public function editaAction($id){
        //recebendo os dados
        $tipo_lancamento = filter_input(INPUT_POST,'tipo_lancamento');
        $pessoa = filter_input(INPUT_POST,'pessoa');
        $descricao = filter_input(INPUT_POST,'descricao');
        $valor = filter_input(INPUT_POST,'valor');
        $data_vencimento = filter_input(INPUT_POST,'data_vencimento');
        $situacao = filter_input(INPUT_POST,'situacao');
        $data_pagamento = filter_input(INPUT_POST,'data_pagamento');

        //verificando se os dados foram passados
        if($tipo_lancamento && $pessoa && $descricao && $valor && $data_vencimento && $situacao){
           if($situacao === 'Pendente' && $data_pagamento !== NULL){
                Lancamento::update(['tipo_lancamento'=>$tipo_lancamento,'pessoa'=>$pessoa,'descricao'=>$descricao,'valor'=>$valor,'data_vencimento'=>$data_vencimento,'situacao'=>$situacao,'data_pagamento'=>NULL])
                ->where('id',$id['id'])
                ->execute();
                $this->redirect('/listaLancamento');
                print_r($data_pagamento);
            }else{
                //Lancamento::update()
                Lancamento::update(['tipo_lancamento'=>$tipo_lancamento,'pessoa'=>$pessoa,'descricao'=>$descricao,'valor'=>$valor,'data_vencimento'=>$data_vencimento,'situacao'=>$situacao,'data_pagamento'=>$data_pagamento])
                ->where('id',$id['id'])
                ->execute();
                $this->redirect('/listaLancamento');
            }
        }
    }
    public function deleta($id){
        Lancamento::delete()->where('id',$id['id'])->execute();
        $this->redirect('/listaLancamento');
    }
}