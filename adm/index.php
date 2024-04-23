
<?php
//comando para inicializar a senssao para mensagens
    session_start();
ob_start();

define('HOTELNH',true);


require './vendor/autoload.php';
  $url = new Core\ConfigController();
  $url ->carregar();








