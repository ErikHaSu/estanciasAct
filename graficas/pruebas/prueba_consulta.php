<?php
    include('abrir_conexion.php');
    //La variable total contiene la cantidad total de puntajes en la tabla puntajes con el alias total
    //$total = mysqli_query($link, "SELECT count(*) as total FROM punpar");
    /*La variable datos guarda la cantidad total de puntajes de la tabla puntajes y necesita el alias total
    para poder hacer referencia a alguna tabla*/
    //$datos = mysqli_fetch_assoc($total);
    //La variable cons contiene los datos de la tabla puntajes 
    /*
    $cons = mysqli_query($link, "SELECT * FROM punpar");
    while ($row = mysqli_fetch_array($cons)) {
        
        $contador += $row['actividad1'];
        $prom = $contador / $datos['total'];

        $contador2 += $row['actividad2'];
        $prom2 = $contador2 / $datos['total'];

        $contador3 += $row['actividad3'];
        $prom3 = $contador3 / $datos['total'];
    }
    $dat = bcdiv($prom, '1',1);
    $dat2 = bcdiv($prom2, '1',1);
    $dat3 = bcdiv($prom3, '1',1);
echo "['$dat',".$dat2.",'$dat3'],";
*/

/* consultas de la edad */

    $once = mysqli_query($link, "SELECT actividad1, actividad2, actividad3 FROM punpar WHERE edad='11'");
    while($C_once = mysqli_fetch_array($once)){
        $count1 += $C_once['actividad1'];
        $count2 += $C_once['actividad2'];
        $count3 += $C_once['actividad3'];
    }
    $total_once = (($count1 + $count2 + $count3)/'3');
    $tOnce = bcdiv($total_once,'1',1);
    
/** Consultas de escuela */

include('cerrar_conexion.php');
