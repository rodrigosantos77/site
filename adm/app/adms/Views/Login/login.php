<?php

if (!defined('HOTELNH')){
    header("Location: /", 'http://localhost/save/');
    die("Desculpe! Acesso restrito! pagina não encontrada!!");
}

echo password_hash(123456,PASSWORD_DEFAULT);
?>




<div class="container-login">

<h1> Área de Acesso Restrito</h1>


 <form method="post" action="">
     <label> Usuário</label>
     <input name="usuario" type="text" placeholder="Informe seu Usuário"><br><br>

     <label> Senha</label>
     <input name="senha" type="password" placeholder="Informe sua senha"><br><br>

        <input name="SendLogin" type="submit" value="Acessar"><br><br>

    <p> <a href="#"> Cadastrar</a>  - <a href="#">Esqueceu a senha?</a></p>


 </form>
</div>








