<?php

print 'cadena de texto';
print '<br><br>';

echo 'varias cadenas de texto', 
'<br>', 'acm1pt';

//print solo perminte imprimir una linea, mientras que echo imprime varias



//booleana

echo '<br><br>';
$booleana = true;
echo $booleana;


//Array
echo '<br><br>';
$arreglo = array('puto', 'el de la moto');
echo $arreglo[0] . ' ' . $arreglo[1];

//los arreglos se imprimen especificando el índice que se desea imprimir
//para concatenar usamos el punto

//array con propiedades
echo '<br><br>';
$arregloColor = array(
    'color1' => 'rojo',
    'color2' => 'azul',
);

echo $arregloColor['color1'];


//objetos
echo '<br><br>';
$objeto = (object)[
    'mueble1' => 'silla',
    'mueble2' => 'mesa'
];

echo $objeto->mueble1;
//esta es la forma específica para imprimir un objeto



?>