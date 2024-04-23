
<?php

if (!defined('HOTELNH')){
    header("Location: /", 'http://localhost/save/');
    die("Desculpe! Acesso restrito! pagina não encontrada!!");
}


echo "Bem Vindo Usuario" .$_SESSION['usuario_nome']."<br>";
//botao sair

echo " <a href='" .URLADM. " sair' >Sair</a>";

