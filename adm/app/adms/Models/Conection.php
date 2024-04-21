<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 09/02/2023
 * Time: 13:48
  */


namespace App\adms\Models;

if (!defined('HOTELNH')){
    header("Location: /", 'http://localhost/site/');
    die("Desculpe! Acesso restrito! pagina não encontrada!!");
}




use PDO;


class Conection{

    private  $db  = "mysql";
    private  $host  = "localhost";
    private  $user  = "root";
    private  $pass  = "";
    private  $dbname  = "hotel1";
    private  $port = 3306;
    private  $connect;




    protected function connect() {

            try{
            /* realizando a conexao direta com o bd via PDO*/
        $this->connect = new PDO($this->db .':host=' .$this->host .';port='.$this->port .';dbname='. $this->dbname,$this->user,$this->pass);

       // echo "conexao estabelecida com  sucesso<br>";

        return  $this->connect;


            }catch(Exception $exception) {

        die('Error! por favor tente novamente!. Caso o problema persista entre em contato com o admin @nhotel.com');

            }


    }





}