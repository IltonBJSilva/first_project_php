<?php


/**
 * valorPredefinido ?? retorno caso não existe o valor;
**/

$user = [
    'name' => 'ilton',
    'age'=> '22',
    'twitch' =>'partner',
];

# Caso existe, vai chamar a primeira opção e vai passando
#, se não vai chamar a segunda opção

echo $user['name'] ?? $user['twitch'] ?? 'sorenhe4rt';


# Com ternario

echo isset($user['name'])? $user['name'] : 'sorenhe4rt'









?>
