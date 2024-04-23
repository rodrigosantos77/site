<?php

namespace App\adms\Models;
use PDO;

class AdmsLogin extends Conection
{

private $resultBD;
private $dados;
private $conexao;
private $resultado = false;

//gerando um get e set do $resutado
    function getResultado(): bool
    {
    return $this->resultado;
    }



    public function login( array $dados = null){
          $this->dados = $dados;
        //  var_dump($this->dados);

      $this->conexao  = $this->connect();

        //query para verificacao se vai existir usuarios no BD com os dados corretamente
        $query_Valida_login = "SELECT id, nome, email, senha FROM  adms_usuarios WHERE email =:email LIMIT 1";
           $result_val_login = $this->conexao->prepare($query_Valida_login);
           $result_val_login->bindParam(':email', $this->dados['usuario'],PDO::PARAM_STR);
           $result_val_login->execute();
          $this->resultBD = $result_val_login->fetch();
          //realizando a validacao dos dados de usuario no banco de dados

        if($this->resultBD){
        //intanciando o metodo validar senha para poder funcionar na pagina
            $this->validaSenha();
        }else{
            //informaçao na tela do usuario de mensagem de erro
            $_SESSION['msg'] = "<p style='color:#ff0000'>Erro: usuário nao encontrado</p> ";
            $this->resultado = false;
        }
           // var_dump($this->dados);
        //var_dump($this->resultBD);

       }

    //metodo para validar a senha de usuario no banco de dados
    private function validaSenha() {
        if(password_verify($this->dados['senha'], $this->resultBD['senha'])){
            //caso o usuario esteja correto; vai fazer a validacao atraveis do id, nome,email para dar o acesso

            $_SESSION['usuario_id'] = $this->resultBD['id'];
            $_SESSION['usuario_nome'] = $this->resultBD['nome'];
            $_SESSION['usuario_email'] = $this->resultBD['email'];
            $this->resultado = true;

        }else{
            //mesangem informando que a senha esta incorreta
            $_SESSION['msg'] = "<p style='color:#ff0000'>Erro: senha de usuario invalida ou incorreta</p> ";


        }

    }
}