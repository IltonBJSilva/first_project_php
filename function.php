<?php


/**
 * valorPredefinido ?? retorno caso não existe o valor;
**/



 function sendMensage(string $nickname, string $message){
    echo '['.date(format: 'Y-m-d H:i:s') . "]".$nickname.":" . strtoupper($message) . PHP_EOL;

 }

 echo sendMensage('Ilton','Ola')




?>
