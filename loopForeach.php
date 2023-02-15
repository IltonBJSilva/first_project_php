<?php


/**
 * valorPredefinido ?? retorno caso não existe o valor;
**/

$user = [
    [
        'name' => 'ilton',
        'age'=> '22',
        'twitch' =>'partner',
    ],

    [
        'name' => 'Yasmin',
        'age'=> '19',
        'twitch' =>'emploey',
    ],

    [
        'name' => 'Ludmila',
        'age'=> '33',
        'twitch' =>'listen',
    ],

    [
        'name' => 'Rodrigo',
        'age'=> '45',
        'twitch' =>'haven',
    ],

];


foreach($user as $key => $value){
    echo $key,'=',$value['name'] . PHP_EOL;

}



?>
