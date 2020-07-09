<?php
namespace src\controllers;
use \core\Controller;
//chamando a classe LoginHabdlers para ser usado nesse controller
use \src\Handlers\LoginHandlers;

class LoginController extends Controller {

    public function login() {
        //verificando se tem alguma mensagem de flash e se ta preenchida é carregada e logo depois é apagada
        $flash = '';
        if(!empty($_SESSION['flash'])){
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }
        $this->render('loginUsuario',['flash'=>$flash]);
    }
    public function loginAction() {
        //recebendo os dados
        $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
        $senha = filter_INPUT(INPUT_POST,'senha');
        //verificando se dados foram passados
        if($email && $senha){
            //verificando se os campo vieram corretos
            $token = LoginHandlers::verifyLogin($email, $senha);
            //se deu certo entra no if e armazena na sessao o token
            if($token){
                $_SESSION['token'] = $token;
                $this->redirect('/');
            }else{
                $_SESSION['flash'] = 'E-mail e/ou senha não conferem.';
                $this->redirect('/loginUsuario');
            }
        }else{
            //caso o usuario atualize a pagina ela é apenas atualizada kk
            $this->redirect('/loginUsuario');
        }
    }

    public function registro(){
        $flash = '';
        if(!empty($_SESSION['flash'])){
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }
        $this->render('registroUsuario',['flash'=>$flash]);
    }
    public function registroAction(){
        //recebendo os dados
        $nome = filter_INPUT(INPUT_POST,'nome');
        $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
        $senha = filter_INPUT(INPUT_POST,'senha');
        //verificando se os dados foram passados
        if($nome && $email && $senha){
            //verificando se tem algum usuario cadastro com o email informado
            if(LoginHandlers::emailExists($email)===false){
                //se não tiver nenhum vai para o proximo passo. E essas informacoes sao guardada em um token que é passado com as informações
                $token = LoginHandlers::addUsuario($nome, $email, $senha);
                $_SESSION['token'] = $token;
                $this->redirect('/');
            }else{
                //se a existir 
                $_SESSION['flash'] = 'E-mail já cadastrado !';
                $this->redirect('/registroUsuario');
            }
        }else{
            $this->redirect('/registroUsuario');
        }
    }
    public function logout(){
        //esvaziando o token
        $_SESSION['token'] = '';
        $this->redirect('/loginUsuario');
    }


}