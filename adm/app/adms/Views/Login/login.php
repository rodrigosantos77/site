<?php

if (!defined('HOTELNH')){
    header("Location: /", 'http://localhost/save/');
    die("Desculpe! Acesso restrito! pagina não encontrada!!");
}
    //criptografando a senha do formulario para colocar no Banco de dados
    //echo password_hash(123456,PASSWORD_DEFAULT);

//criancao a senssao para informa as mensagens de retornos (erro ou validacao ao usuario)
if(isset($_SESSION['msg'])){ //se existir mensagem msotrar na tela
    echo $_SESSION['msg']; //mostrar a mensagem
    unset($_SESSION['msg']); // apos mostrar a msg destruir-la
}

 // var_dump($this->dados);
//atribuindo a variavel this->['form'] e verificando se esta correto dos dados
    if(isset($this->dados['form'])){
       $valor_Form = $this->dados['form'];
    }


?>




<div class="container-login">

<h1> Área de Acesso Restrito</h1>

 <form method="post" action="">
     <label> Usuário</label>
     <input name="usuario" type="text" placeholder="Informe seu Usuário" value="<?php if(isset($valor_Form['usuario'])) {echo $valor_Form['usuario'];}?>"><br><br>

     <label> Senha</label>
     <input name="senha" type="password" placeholder="Informe sua senha"><br><br>

        <input name="SendLogin" type="submit" value="Acessar"><br><br>

    <p> <a href="#"> Cadastrar</a>  - <a href="#">Esqueceu a senha?</a></p>
 </form>
</div>



