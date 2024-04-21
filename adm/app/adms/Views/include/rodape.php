<?php
if (!defined('HOTELNH')){
    header("Location: /", 'http://localhost/site/');
    die("Desculpe! Acesso restrito! pagina não encontrada!!");
}
//var_dump($this->dados['rodape']);
?>

<div class="jumbotron rodapee">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4">
                <h5><?php echo $this->dados['rodape']['titulo_pg'] ;?></h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#inicio" class="link-rodape">Home</a>
                    </li>
                    <li>
                        <a href="#servicos" class="link-rodape">Serviço</a>
                    </li>
                    <li>
                        <a href="#contato" class="link-rodape">Contato</a>
                    </li>
                </ul>
            </div>

            <div class="col-12 col-sm-12 col-md-4">
                <h5><?php echo $this->dados['rodape']['titulo_contato'] ;?></h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="<?php echo $this->dados['rodape']['link_telefone'];?>" class="link-rodape"><?php echo
                            $this->dados['rodape']['txt_telefone'];?></a>
                    </li>
                    <li>
                        <a href="<?php echo $this->dados['rodape']['link_end'];?>" class="link-rodape"><?php echo $this->dados['rodape']['txt_end'];?></a>
                    </li>
                    <li>
                        <a href="<?php echo $this->dados['rodape']['link_cnpj'];?>" class="link-rodape"><?php echo
                            $this->dados['rodape']['txt_cpnj'];?></a>
                    </li>
                </ul>
            </div>

            <div class="col-12 col-sm-12 col-md-4">
                <h5><?php echo $this->dados['rodape']['titulo_rede_soc'] ;?></h5>
                <ul class="list-unstyled">
                    <li>
                        <i class="fa-brands fa-instagram"></i>
                        <a href="<?php echo $this->dados['rodape']['link_um_rede_soc'];?> " target="_blank" class="link-rodape"><?php echo $this->dados['rodape']['txt_um_rede_soc'];?></a>
                    </li>
                    <li>
                        <i class="fa-brands fa-facebook"></i>
                        <a href="<?php echo $this->dados['rodape']['link_dois_rede_soc'];?>" target="_blank"
                           class="link-rodape"><?php echo $this->dados['rodape']['txt_dois_rede_soc'];?></a>
                    </li>

                

                <!-- o erro esta nessa linha - falta o link -->  
                <li>
                        <i class="fa-brands fa-whatsapp"></i>
                        <a href="<?php echo $this->dados['rodape']['link_tres_rede_soc'];?>" target="_blank"
                           class="link-rodape"><?php echo $this->dados['rodape']['txt_tres_rede_soc'];?></a>

                </li>
                    <li>
                        <i class="fa-brands fa-telegram"></i>
                        <a href="<?php echo $this->dados['rodape']['link_quatro_rede_soc'];?> " target="_blank"
                           class="link-rodape"><?php echo $this->dados['rodape']['txt_quatro_rede_soc'];?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>



