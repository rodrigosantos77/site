
<?php
ob_start();

define('HOTELNH',true);


require './vendor/autoload.php';
  $url = new Core\ConfigController();
  $url ->carregar();








