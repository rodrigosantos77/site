<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 08/02/2023
 * Time: 13:41
 */

namespace App\sts\Controllers;

if (!defined('HOTELNH')){

    header("Location: /", 'http://localhost/site/');
    die("Desculpe! Acesso restrito! pagina não encontrada!!");
}



use App\sts\Models\Sts_Home;
use http\Header;

class Home
{
    private $dados;

public function index(){

        $viewHome = new Sts_Home();
     $this->dados =  $viewHome->index();

    // var_dump($this->dados); /* removido o dump do metodo e passa a chava os dados direto pela controller*/
            $carregarView = new \Core\ConfigView( "sts/Views/home/home",$this->dados);

            $carregarView->rederizar();


}

}