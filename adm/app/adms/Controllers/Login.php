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
private $dadosForm;  //otimizando os dados do formulario

public function index(){

    //CRIANDO A FUNCAO PARA RECEBER OS DADOS VINDOS DO FORMULARIO
    $this->dadosForm  =  filter_input_array(INPUT_POST, FILTER_DEFAULT);
            //realizando uma verificacao vinda do banco de dados
        if(!empty($this->dadosForm['SendLogin'])){
           $val_Login =  new \App\adms\Models\AdmsLogin();
           $val_Login->login($this->dadosForm);
           //inserindo a confirmacao do usuario logado atraves do getResultado
            if($val_Login->getResultado()){
                //etapa que vai redirecionar o usuario a pagina de dashboard
                    $urlDestino = URLADM ."home";
                    header("Location: $urlDestino");
            }else{
                //metdo que vai pegar a posicao exata do formulario
                $this->dados['form'] = $this->dadosForm;

            }
        }
  //  var_dump($this->dados); //confirmacao do recebeminto de dados vindas do formulario


    $carregarView = new \Core\ConfigView("adms/Views/Login/login",$this->dados);
    $carregarView->rederizar();

}
}