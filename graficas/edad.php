<?php
    include('pconexionp/abrir_conexion.php');
    /** Edad 7 años */
    $VII = mysqli_query($link, "SELECT actividad1, actividad2, actividad3 FROM punpar WHERE edad='7'");
    while($cSiete = mysqli_fetch_array($VII)){
        $count7_1 += $cSiete['actividad1'];
        $count7_2 += $cSiete['actividad2'];
        $count7_3 += $cSiete['actividad3'];
    }
    $totalSiete = (($count7_1 + $count7_2 + $count7_3)/'3');
    $tSiete = bcdiv($totalSiete,'1',1);

    /** Edad 8 años */
    $VIII = mysqli_query($link, "SELECT actividad1, actividad2, actividad3 FROM punpar WHERE edad='8'");
    while($cOcho = mysqli_fetch_array($VIII)){
        $count8_1 += $cOcho['actividad1'];
        $count8_2 += $cOcho['actividad2'];
        $count8_3 += $cOcho['actividad3'];
    }
    $totalOcho = (($count8_1 + $count8_2 + $count8_3)/'3');
    $tOcho = bcdiv($totalOcho,'1',1);
    /** Edad 9 años*/
    $IX = mysqli_query($link, "SELECT actividad1, actividad2, actividad3 FROM punpar WHERE edad='9'");
    while($cNueve = mysqli_fetch_array($IX)){
        $count9_1 += $cNueve['actividad1'];
        $count9_2 += $cNueve['actividad2'];
        $count9_3 += $cNueve['actividad3'];
    }
    $totalNueve = (($count9_1 + $count9_2 + $count9_3)/'3');
    $tNueve = bcdiv($totalNueve ,'1',1);
    /** Edad 10 años*/
    $X = mysqli_query($link,"SELECT actividad1, actividad2, actividad3 FROM punpar WHERE edad='10'");
    while($cDiez = mysqli_fetch_array($X)){
        $count10_1 += $cDiez['actividad1'];
        $count10_2 += $cDiez['actividad2'];
        $count10_3 += $cDiez['actividad3'];
    }
    $totalDiez = (($count10_1 + $count10_2 + $count10_3)/'3');
    $tDiez = bcdiv($totalDiez,'1',1);
    /** Edad 11 años */
    $XI = mysqli_query($link, "SELECT actividad1, actividad2, actividad3 FROM punpar WHERE edad='11'");
    while($cOnce = mysqli_fetch_array($XI)){
        $count11_1 += $cOnce['actividad1'];
        $count11_2 += $cOnce['actividad2'];
        $count11_3 += $cOnce['actividad3'];
    }
    $totalOnce = (($count11_1 + $count11_2 + $count11_3)/'3');
    $tOnce = bcdiv($totalOnce,'1',1);
    /** Edad 12 años */
    $XII = mysqli_query($link,"SELECT actividad1, actividad2, actividad3 FROM punpar WHERE edad='12'");
    while($cDoce = mysqli_fetch_array($XII)){
        $count12_1 += $cDoce['actividad1'];
        $count12_2 += $cDoce['actividad2'];
        $count12_3 += $cDoce['actividad3']; 
    }
    $totalDoce = (($count12_1 + $count12_2 + $count12_3)/'3');
    $tDoce = bcdiv($totalDoce,'1',1);

    $edad = array(
        'siete' => $tSiete,
        'ocho' => $tOcho,
        'nueve' => $tNueve,
        'diez' => $tDiez,
        'once' => $tOnce,
        'doce' => $tDoce
    );
    echo json_encode($edad);

    include('pconexionp/cerrar_conexion.php');
?>
