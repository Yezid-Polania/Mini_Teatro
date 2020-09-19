<?php

/*
 * La función imprimir arreglo tiene la tarea de presentar gráficamente 
 * el arreglo como una matriz de fila y columna. que sea fácil de ver para 
 * el operador.
 */
function imprimirArreglo($arreglo)
{
    $m=0;
    $dtabla = '<table border="1">';
    for($i=0;$i<=5;$i++)
    {
        $dtabla .= '<tr>';
        for($j=0;$j<=5;$j++)
        {
            
            $dtabla .= '<td>'.$arreglo[$m].'</td>';
            $m++;
        }
    }
    $dtabla .= '</table></div>';
    $dtabla='<div style=" background-color:#AEC965; width:10%;'
            . 'position: absolute; left: 700px; padding: 8px; margin: 3px; '
            . 'top:19%;">'.$dtabla;
 
    echo $dtabla;
}