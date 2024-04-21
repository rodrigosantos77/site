<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 08/02/2023
 * Time: 13:41
 */

namespace App\adms\Controllers;

if (!defined('HOTELNH')){

    header("Location: /", 'http://localhost/site/');
    die("Desculpe! Acesso restrito! pagina não encontrada!!");
}

class Login
{

private $dados;

public function index(){



   //  $this->dados = [];
          /* RECEBENDO OS DADOS DO FORMULÁRIO DA PAGINA LOGIN PELO METODO POST */



    /* REALIZANDO A VIRIFICACAO DO FORMULARIO DE LOGIN*/

    $this->dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if(!empty($this->dados['SendLogin'] )){
            //instanciando a classe da Models ADMSlogin//
          $validLogin = new \App\adms\Models\AdmsLogin();
          $validLogin->login($this->dados);

    }

   // var_dump($this->dados);

              $carregarView = new \Core\ConfigView("adms/Views/Login/login",$this->dados);
          $carregarView->rederizar();

}

}