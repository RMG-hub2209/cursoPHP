<?php

//funciones

function bienvenido(){
    echo 'bienvenido al club';
}

bienvenido();

echo '<br><br>';

//funciones con parámetro

function sabe($acm1pt){
    echo $acm1pt;
}

sabe('sabe');
echo '<br><br>';

//funciones con retorno
function retorno($retornar){
    return $retornar;
}

echo 'Retorname esta';

?>