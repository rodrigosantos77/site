<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 07/02/2023
 * Time: 14:09
 */

namespace Core;



if (!defined('HOTELNH')){

    header("Location: /", 'http://localhost/site/');
    die("Desculpe! Acesso restrito! pagina não encontrada!!");
}




class ConfigController
{
        private $url;
        public function __construct(){

            if(!empty(filter_input(INPUT_GET,"url", FILTER_DEFAULT))){

                $this->url = filter_input(INPUT_GET,"url", FILTER_DEFAULT);

            }else{
                    $this->url = "login";
            }

       }

       public function carregar(){

            $this->config();

            $urlController  = ucwords($this->url);
            $classe = "\\App\\adms\\Controllers\\" .$urlController;

                $classeCarregar = new $classe;
                $classeCarregar->index();
       }

       private function config (){

            /*define de carregamentos de URL do projeto */
            define('URL','http://localhost/site/adm');
       }
}