<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 09/02/2023
 * Time: 13:31
 */

namespace App\sts\Models;



if (!defined('HOTELNH')){

    header("Location: /", 'http://localhost/site/');
    die("Desculpe! Acesso restrito! pagina não encontrada!!");
}




class Sts_Home extends Conection
{

    private $connexaobd;
    private $dados;
    public function index(){


         $this->connexaobd = $this->connect();
           $this->viewTopo();
           $this->viewServicos();
           $this->viewContato();
           $this->viewRodape();
           return $this->dados; /* return para instancar a controller e por isso remove o vardump do metodo */


      //  echo "Models da pagina home<br>";
    }
    private function viewTopo (){
        /* comando de conexao da tabela homes_topo no banco de dados*/
        $query_home_topo = "SELECT titulo_topo,subtitulo_topo,botao_topo,link_botao_topo,image_topo,home_image_icon  FROM homes_topos LIMIT 1";
        $result_home_topo = $this->connexaobd->prepare($query_home_topo);
        $result_home_topo->execute();
        $this->dados['topo']= $result_home_topo->fetch();

    }

    private function viewServicos (){
        /* comando de conexao da tabela homes_topo no banco de dados*/
        $query_home_serv = "SELECT titulo_serv,subtitulo_serv,icone_um_serv,titulo_um_serv,desc_um_serv,icone_dois_serv,titulo_dois_serv,desc_dois_serv,icone_tres_serv,titulo_tres_serv,desc_tres_serv,icone_quatro_serv,titulo_quatro_serv,desc_quatro_serv FROM home_servicos LIMIT 1";
        $result_home_serv = $this->connexaobd->prepare($query_home_serv);
        $result_home_serv->execute();
        $this->dados['servicos']= $result_home_serv->fetch();

    }

    private function viewContato(){

        $query_home_contato = "SELECT titulo_contato,subtitulo_contato,end_contato,tel_contato,email_contato,btn_link,image FROM  home_contatos LIMIT 1";
        $result_home_contato = $this->connexaobd->prepare($query_home_contato);
        $result_home_contato->execute();
        $this->dados['contato']= $result_home_contato->fetch();

    }

    private function viewRodape (){

        $query_home_rodape = "SELECT titulo_pg,titulo_contato,txt_telefone,link_telefone,txt_end,link_end,txt_cpnj,link_cnpj,titulo_rede_soc,txt_um_rede_soc,link_um_rede_soc,icone_um_red_soc,txt_dois_rede_soc,link_dois_rede_soc,icone_dois_red_soc, txt_tres_rede_soc,link_tres_rede_soc,icone_tres_red_soc,txt_quatro_rede_soc, link_quatro_rede_soc,icone_quarto_red_soc FROM  rodape LIMIT 1";
        $result_home_rodape = $this->connexaobd->prepare($query_home_rodape);
        $result_home_rodape->execute();
        $this->dados['rodape']= $result_home_rodape->fetch();

    }
}