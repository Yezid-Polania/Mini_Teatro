<?php

/*
 * Como hay que enviar cadena a traves del pos, es necesario realizar la 
 * conversión de la cadena en arreglo. para hacer la transferencia sin que 
 * se pierdan los datos.
 */
function convertirCadena($datos)//cadena a arreglo
{
     $array = explode(",",$datos);
     return $array;
}
/*
 * Como hay que enviar cadena a traves del pos, es necesario realizar la 
 * conversión del arreglo a cadena. para hacer la transferencia sin que 
 * se pierdan los datos.
 */
function convertirArreglo($arreglo)//arreglo a cadena
{      
    $cadena = implode(",", $arreglo);
    return $cadena;
}


/*
 * Debido a que el arreglo de datos es lineal,y los datos que se envian son
 * fila y columna, la función hace una intepretación de los dos datos a
 * un único índice. Entonces la función posición toma fila y columna y entrega
 * el índice del arreglo lineal.
 * 1,1 7 1,2 8 1,3 9 1,4 10 1,5 11      col 0*6 + fila +6
 * 2,1 13 2,2 14 2,3 15 2,4 16 2,5 17   col 1*6 + fila + 6
 */
function posicion($fila,$col)//hallar la posición
{
    if ($fila>0 && $fila<=5 && $col>0 && $col<=5)
    {
        $posi=($col-1)*6+$fila+6;
        return $posi;
    }
}

