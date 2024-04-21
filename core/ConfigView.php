<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 10/02/2023
 * Time: 21:30
 */

namespace Core;


if (!defined('HOTELNH')){

    header("Location: /", 'http://localhost/site/');
    die("Desculpe! Acesso restrito! pagina não encontrada!!");
}


class ConfigView
{

    /* usando o comstruct para enviar as views carregadas...$nome == views === $dados==informaçoes do banco de dados */
           private $nome;
           private $dados;

            public function __construct($nome, array $dados)
            {

                $this->nome = $nome;
                $this->dados = $dados;
               // var_dump($dados);
               // var_dump($nome);

            }

    /*metodo resposavel pela validacao das views e paginas de carregamentos*/

    public function rederizar (){
        if(file_exists('app/'.$this->nome . '.php')){

            /* verificação e inclusao do arquivo pagina da views selecionadas*/

            include 'app/'.$this->nome .'.php';
            include 'app/sts/Views/include/head.php';
            include 'app/sts/Views/include/footer.php';
            include 'app/sts/Views/include/rodape.php';



        }else{
          echo "erro ao carregar a pagina <br>"; /* verificação da view  */
          echo "erro ao carregar a view {$this->nome} <br>"; /* verificação da view exata onde esta o erro*/
        }



}


}