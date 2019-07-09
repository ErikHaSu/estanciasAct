<?php
    $link = new mysqli("127.0.0.1", "Admin", "ErikHaSu10-7", "edu_vial_db");
    if ($link->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $link->connect_errno . ") " . $link->connect_error;
    }
?>