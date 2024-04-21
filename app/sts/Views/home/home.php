
<?php

if (!defined('HOTELNH')){
    header("Location: /", 'http://localhost/save/');
    die("Desculpe! Acesso restrito! pagina não encontrada!!");
}
?>


<nav class="navbar navbar-expand-lg navbar-dark fixed-top menu" style="background-color: #120b9f;">
    <div class="container">
        <a class="navbar-brand" href="#">Novo Horizonte Hotel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Reservas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#servicos">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#contato">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron text-center desc-top" style="background-image: url('<?php echo URL;?>app/sts/assets/image/home_topo/<?php echo $this->dados['topo']['image_topo'];?>')">
    <h2><a name="inicio" class="link"></a></h2>
    <div class="container">
        <h1 class="display-3 mb-4"> <?php echo $this->dados['topo']['titulo_topo'];?></h1>
        <p class="lead mb-4"><?php echo $this->dados['topo']['subtitulo_topo'];?> </p>
        <p>
            <a href="#contato" class=" btn btn-outline-light btn-lg"><?php echo $this->dados['topo']['botao_topo'];?></a>
        </p>
    </div>
</div>

<div class="jumbotron servicos">
    <h2><a name="servicos" class="link"></a></h2>
    <div class="container text-center">
        <h2 class="display-4"><?php echo $this->dados['servicos']['titulo_serv'] ;?></h2>
        <p class="lead pb-4"><?php echo $this->dados['servicos']['subtitulo_serv'] ;?></p>
        <div class="row">
            <div class="col-lg-3">
                <div class="rounded-circle circulo centralizar shadow border border-info">
                    <i class="<?php echo $this->dados['servicos']['icone_um_serv'] ;?>"></i>
                </div>
                <h2 class="mt-3 mb-3"><?php echo $this->dados['servicos']['titulo_um_serv'];?></h2>
                <p><?php echo $this->dados['servicos']['desc_um_serv'] ;?></p>
            </div>
            <div class="col-lg-3">
                <div class="rounded-circle circulo centralizar shadow border border-info">
                     <i class="<?php echo $this->dados['servicos']['icone_dois_serv'] ;?>"></i>
                </div>
                <h2 class="mt-3 mb-3"><?php echo $this->dados['servicos']['titulo_dois_serv'];?></h2>
                <p><?php echo $this->dados['servicos']['desc_dois_serv'] ;?></p>

            </div>
            <div class="col-lg-3">
                <div class="rounded-circle circulo centralizar shadow border border-info">
                    <i class="<?php echo $this->dados['servicos']['icone_tres_serv'] ;?>"></i>
                </div>
                <h2 class="mt-3 mb-3"><?php echo $this->dados['servicos']['titulo_tres_serv'];?></h2>
                <p><?php echo $this->dados['servicos']['desc_tres_serv'] ;?></p>
            </div>
            <div class="col-lg-3">
                <div class="rounded-circle circulo centralizar shadow border border-info">
                    <i class="<?php echo $this->dados['servicos']['icone_quatro_serv'] ;?>"></i>
                </div>
                <h2 class="mt-3 mb-3"><?php echo $this->dados['servicos']['titulo_quatro_serv'];?></h2>
                <p><?php echo $this->dados['servicos']['desc_quatro_serv'];?></p>
            </div>
        </div>
    </div>
</div>

<div class="jumbotron contato" style="background-image: url('<?php echo URL;?>app/sts/assets/image/home_contato/<?php echo $this->dados['contato']['image'];?>')">
    <h2><a name="contato" class="link"></a></h2>
    <div class="container">
        <h2 class="display-4 mb-4 text-center"><?php echo $this->dados['contato']['titulo_contato'];?></h2>
        <div class="row">
            <div class="col-lg-6">
                <h2 class="mt-4 mb-4"><?php echo $this->dados['contato']['subtitulo_contato'];?></h2>
                <p><?php echo $this->dados['contato']['end_contato'];?></p>
                <p><?php echo $this->dados['contato']['tel_contato'];?></p>
                <p><?php echo $this->dados['contato']['email_contato'];?></p>
            </div>

            <div class="col-lg-6">
                <form>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome completo" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Seu melhor e-mail" required>
                    </div>
                    <div class="form-group">
                        <label for="assunto">Assunto</label>
                        <input type="text" name="assunto" class="form-control" id="assunto" placeholder="Assunto da mensagem" required>
                    </div>
                    <div class="form-group">
                        <label for="conteudo">Conteúdo</label>
                        <textarea name="conteudo" class="form-control" id="conteudo" placeholder="Conteúdo da mensagem" required></textarea>
                    </div> <br>
                    <button type="submit" class="btn btn-outline-light">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

