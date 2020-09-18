<?php

namespace src\handlers;
use \core\Controller;
use \src\models\Usuario;

class LoginHandlers {

    public static function checkLogin(){
        //verificando se existe a session token e se esta não está vazia
        if(!empty($_SESSION['token'])){
            //se existir é pegado a session token
            $token = $_SESSION['token'];
            //vericando se existe algum usuario com o token pegado
            $data = Usuario::select()->where('token', $token)->one();

            if($data > 0){
                //se achou algum dado é montado uma classe com os dados do usuario, ou seja é preenchido as informações
                $loUsuario = new Usuario();
                $loUsuario->id = $data['id'];
                $loUsuario->nome = $data['nome'];
                $loUsuario->email = $data['email'];
                return $loUsuario;
            }
        }
        return false;
    }

    public static function verifyLogin($email, $senha){
        //verificando o email passado
        $verificaUsuario = Usuario::select()->where('email', $email)->one();
        //se deu certo entra no if
        if($verificaUsuario){
            //se entrou no if acima,ele verifica a senha agora
            if(password_verify($senha,$verificaUsuario['senha'])){
                //caso de certo, é gerado o token e o mesmo é retornado
                $token = md5(time().rand(0,9999).time());
                //logo depois se faz uma alteracao no usuario, pq vai se salvar o token no usuario que logou
                Usuario::update()
                ->set('token',$token)
                ->where('email',$email)
                ->execute(); 
                return $token;
            }
        }
        return false;
    } 

    public function emailExists($email){
        //verificando o email passado
        $verificaUsuario = Usuario::select()->where('email', $email)->one();
        return $verificaUsuario ? true : false;
    }

    public function addUsuario($nome, $email, $senha){
        //gerando o hash da senha, porque não se salva senha diretamente no bd 
        $hash = password_hash($senha,PASSWORD_DEFAULT);
        //gerando o token
        $token = md5(time().rand(0,9999).time());

        Usuario::insert([
            'nome'=>$nome,
            'email'=>$email,
            'senha'=>$hash,
            //o token abaixo ja permite que o usuario seja logado, apos realizar o cadastro 
            'token'=>$token
        ])->execute();
        return $token;
    }
}



