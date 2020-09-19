
<html>
    <head>
    <script languaje="javascript">
        function notificacion(){
        alert ("La Operación NO puede ser realizada");
    }
    </script>      
    </head>    
    <body>
        <h2 style= 'text-align: center;background-color:#381356;color:#FFF;' >
            INSTRUCTOR: Julio Cesar Duque - APRENDIZ: Yezid Polanía Reina</h2>
        <?php
/*
 * Desarrollado por: YEZID ORLANDO POLAN�?A REINA
 * programa: DESARROLLO WEB CON PHP.
 * Taller: Uso de formularios para transferencia�?.
 */

require_once 'arregloDatos.php'; 
require_once 'grafico.php'; 

if (isset($_POST['datos'])) {
       
    $datos = $_POST['datos'];
    $fila = $_POST['fila'];
    $puesto = $_POST['puesto'];
    $operacion = $_POST['operacion'];
} else {
    $datos = '0,1,2,3,4,5,'
            . '1,L,L,L,L,L,'
            . '2,L,L,L,L,L,'
            . '3,L,L,L,L,L,'
            . '4,L,L,L,L,L,'
            . '5,L,L,L,L,L';//esto es una cadena
    $puesto =1;
    $fila=1;
    $operacion='L';
    
}

    $arreglo=convertirCadena($datos);//convierte la cadena inicial en arreglo
    imprimirArreglo($arreglo); //imprime el arreglo en la tabla
    
    //esta es la conversión de fila y puesto a un indice.
    $conv=posicion($puesto,$fila);
    
    //echo 'apuntador de tabla: '.$conv.'</br>';
    //echo 'valor arreglo: '.$arreglo[$conv].'</br>';
    //revisa que el puesto no este vendido
   if ( $arreglo[$conv]=='L' || $arreglo[$conv]=='R')
   {
    switch ($operacion)//cambia el valor para el caso en que esté permitido
    {

        case 'reservar':$arreglo[$conv]='R';break;
        case 'comprar':$arreglo[$conv]='V';break;
        case 'liberar':$arreglo[$conv]='L';break;
    }
   }
       else{
    //notifica error
        ?><script languaje="javascript">notificacion();</script><?php ;
    }
    //cambia el arreglo nuevamente a cadena
    $datos=convertirArreglo($arreglo);
    //imprime el arreglo modificado
    imprimirArreglo($arreglo); 
    
    //$conv=posicion($puesto,$fila);//esta es la conversión de fila y puesto a un indice.
    $estado=$arreglo[$conv];
    //echo 'posicion tabla: '.$conv.'puesto y fila: '.$puesto.$fila.'</br>'.'Estado: '.$estado.'</br>';
    //echo 'dato en el arreglo'.$arreglo[$conv];
    //$cambio=$arreglo[$conv];

?>
        <div style= 'text-align: right; background-color:#AEC965; width:10%; 
             position:absolute; left: 500px; top: 20%; padding: 12px;'>
        <form action="index.php" method="POST">
            <input type="text"  name="datos" rows="5" cols="20" style="display:none;"; value="<?=$datos?>" >
                </text>
            <label for="fila">Fila</label>
            <input type="text" id="fila" name="fila" size="3" value="1"><br>
            <label for="puesto">Puesto</label>
            <input type="text" id="puesto" name="puesto" size="3" value="1"><br>
            
            <label for="reservar">Reservar</label>
            <input type="radio" id="reservar" name="operacion" value="reservar"><br>
            <label for="comprar">Comprar</label>
            <input type="radio" id="comprar" name="operacion" value="comprar"><br>
            <label for="liberar">Liberar</label>
            <input type="radio" id="liberar" name="operacion" value="liberar"><br>
            <button type="reset" onclick="location.href='index.php'">Borrar</button>
            <input type="submit" value="Enviar">
</form> 
</div>      
</body>
</html>