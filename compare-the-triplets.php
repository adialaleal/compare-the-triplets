<?php

function solve(){

	//zerando as variáveis.
    $result['a'] = $result['b'] = 0;
    //lopping do resultado da quantidade de argumentos capturados na função 'func_get_args()'.
    for ($i = 0; $i < count(func_get_args())/2; $i++)
    	//condição baseada na lista de argumentos
        if (func_get_args()[$i] > func_get_args()[($i+(count(func_get_args())/2))]) 
            $result['a']++;
        elseif (func_get_args()[$i] < func_get_args()[($i+(count(func_get_args())/2))])
            $result['b']++;
    //resultado da acumulação de valores nas variáveis.    
    return array($result['a'], $result['b']);
}