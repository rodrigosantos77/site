<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 08/02/2023
 * Time: 14:01
 */

namespace App\sts\Controllers;


if (!defined('HOTELNH')){

    header("Location: /", 'http://localhost/site/');
    die("Desculpe! Acesso restrito! pagina não encontrada!!");
}





class Erro
{
    public function index(){
        echo "pagina de erro <br>";
    }


}