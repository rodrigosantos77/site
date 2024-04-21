<?php

namespace App\adms\Models;
use PDO;

class AdmsLogin extends Conection
{

private $resultadoBD;
private $dados;
private $conn;


public function login(array $dados = null){
    $this->dados = $dados;
    $this->conn = $this->connect();

    //criando a query da conexao do bd com o login de usuario
    $query_Login = "SELECT id, nome, email, senha FROM  adms_usuarios WHERE email :=email  LIMIT 1";
           $result_val_login = $this->conn->prepare($query_Login);
           $result_val_login->bindParam(':email',$this->dados['usuario'], PDO::PARAM_STR);
           $result_val_login->execute();
                $this->resultadoBD = $result_val_login->fetch();

              //  var_dump($this->dados);
   // var_dump($this->resultadoBD);



}

}