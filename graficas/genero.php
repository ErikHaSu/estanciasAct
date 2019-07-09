<?php
    include('pconexionp/abrir_conexion.php');
    /**masculino y femenino son variables que guardan los query de las consultas hacia los puntajes del sexo
    correspondiente*/
    $masculino = mysqli_query($link, "SELECT actividad1, actividad2, actividad3 FROM punpar WHERE sexo = 'M'");
    $femenino = mysqli_query($link, "SELECT actividad1, actividad2, actividad3 FROM punpar WHERE sexo = 'F'");
    //los ciclos wihle toman los datos de las consultas y extraen los puntajes
    while($M = mysqli_fetch_array($masculino)){
        $countM_1 += $M['actividad1'];
        $countM_2 += $M['actividad2'];
        $countM_3 += $M['actividad3'];
    }
    while($F = mysqli_fetch_array($femenino)){
        $countF_1 += $F['actividad1'];
        $countF_2 += $F['actividad2'];
        $countF_3 += $F['actividad3'];
    }
    //las variables totalM y totalF hacen un promedio de los puntajes de las actividades
    $totalM = (($countM_1 + $countM_2 + $countM_3)/'3');
    $totalF = (($countF_1 + $countF_2 + $countF_3)/'3');
    //las variables tM y tF redondean los decimales arrojados por las variables totalM y totalR
    $tM = bcdiv($totalM, '1',1);
    $tF = bcdiv($totalF,'1',1);
    
    $genero = array(
        'masculino' => $tM,
        'femenino' => $tF
    );
    echo json_encode($genero);
    
    include('pconexionp/cerrar_conexion.php');
?>