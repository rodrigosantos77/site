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



use App\sts\Models\Sts_Home;
use http\Header;

class Home
{


public function index(){

       echo " pagina home controller<br>";

}

}