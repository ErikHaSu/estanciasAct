<?php
    include('pconexionp/abrir_conexion.php');
    //La variable total contiene la cantidad total de puntajes en la tabla puntajes con el alias total
    $total = mysqli_query($link, "SELECT count(*) as total FROM punpar");
    /*La variable datos guarda la cantidad total de puntajes de la tabla puntajes y necesita el alias total
    para poder hacer referencia a alguna tabla*/
    $datos = mysqli_fetch_assoc($total);
    //La variable cons contiene los datos de la tabla puntajes 
    $cons = mysqli_query($link, "SELECT * FROM punpar");
    while ($row = mysqli_fetch_array($cons)) {
        
        $contador += $row['actividad1'];
        $prom = $contador / $datos['total'];

        $contador2 += $row['actividad2'];
        $prom2 = $contador2 / $datos['total'];

        $contador3 += $row['actividad3'];
        $prom3 = $contador3 / $datos['total'];
	}
	
    $p1 = bcdiv($prom,'1',1);
    $p2 = bcdiv($prom2,'1',1);
    $p3 = bcdiv($prom3,'1',1);

    $promedios = array(
        'promedio1' => $p1,
        'promedio2' => $p2,
        'promedio3' => $p3
    );
    echo json_encode($promedios);

    include('pconexionp/cerrar_conexion.php');
    ?>
