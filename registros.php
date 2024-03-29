﻿<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Registro </title>
        <link rel="icon" href="resources/favicon.ico" type="icon" sizes="TAMAÑO-FAV">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.5/css/uikit.min.css" />
        <link rel="stylesheet" href="css/style.css">
        <!-- UIkit JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.5/js/uikit.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.5/js/uikit-icons.min.js"></script>

        <script src="scripts/validar.js" ></script>
    </head>
<body>
  <nav class="uk-navbar-container" id="nav" uk-navbar>
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="index.html"> Educación Vial</a></li>
            <li class="uk-active"><a href="index.html"><span class="uk-icon uk-margin-small-right" uk-icon="icon: home"></span> Inicio</a></li>
            <li class="uk-active"> 
                <a href="nosotros.html"><span class="uk-icon uk-margin-small-right" uk-icon="icon: users"></span> Nosotros </a>
            </li>
            <li class="uk-active"><a href="graficas/index.html" uk-toggle><span class="uk-icon uk-margin-small-right" uk-icon="icon: world"></span> Estadisticas </a></li>
            <li class="uk-active"><a href="info.html"><span class="uk-icon uk-margin-small-right" uk-icon="icon: info"></span> Info </a></li>
        </ul>

    </div>
    <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
        <li class="uk-active"><a href="index.html" uk-toggle><span class="uk-icon-button uk-margin-small-right" uk-icon="reply"></span>Regresar</a></li>
        </ul>
    </div>
  </nav>
    <div class="reg">
        <div class="uk-inline">
            <img src="resources/1.jpg" id="bg" alt="">
            <div class="uk-overlay-primary uk-position-cover"></div>
            <div class="uk-overlay uk-position-center uk-light">
            <a href="#modal1" uk-toggle><span class="uk-icon uk-margin-small-right" uk-icon="icon: pencil"></span> Registro de escuela </a>
            <br>
            <br>
            <br>
            <a href="#modal2" uk-toggle><span class="uk-icon uk-margin-small-right" uk-icon="icon: user"></span> Registro del participante </a>
            </div>
        </div>
    </div>

    <div id="modal1" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-outside" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title">Formulario de datos escolares</h2>
            </div>
            <div class="uk-modal-body">
                <div>
                    <form method="post" class="uk-form-horizontal uk-margin-large" action="datos_escuela.php" onsubmit ="return escuela();">
                        <div class="uk-margin">
                            <label class="uk-form-label" for="nombre">Nombre de la escuela</label>
                            <div class="uk-form-controls">
                                <div class="uk-margin">
                                    <div class="uk-inline">
                                        <span class="uk-form-icon" uk-icon="icon: pencil"></span>
                                        <input type="text" class="uk-input uk-form-width-large" id="nombreE" placeholder="Nombre de la escuela.." name="nombre" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="uk-margin">
                            <label class="uk-form-label" for="clave">Clave escolar</label>
                            <div class="uk-form-controls">
                                <div class="uk-margin">
                                    <div class="uk-inline">
                                        <span class="uk-form-icon" uk-icon="icon: pencil"></span>
                                        <input type="text" class="uk-input uk-form-width-large" id="clave" placeholder="Clave escolar..." name="clave" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="uk-margin">
                            <label class="uk-form-label" for="localidad">Localidad</label>
                            <div class="uk-form-controls">
                                <div class="uk-margin">
                                    <div class="uk-inline">
                                        <span class="uk-form-icon" uk-icon="icon: location"></span>
                                        <input type="text" class="uk-input uk-form-width-large" id="localidad" placeholder="Localidad...." name="localidad" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
            <div class="uk-modal-footer uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancelar</button>
                <button class="uk-button uk-button-primary" type="submit" value="Submit" >Guardar</button>
            </div>
        </form>
        </div>
    </div>

    <div id="modal2" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-outside" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title">Formulario de datos del participante</h2>
            </div>
            <div class="uk-modal-body">
            <form method="post" class="uk-form-horizontal uk-margin-large" action="datos_participante.php" onsubmit= "return participante();">
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="nombre">Nombre del participante</label>
                                    <div class="uk-form-controls">
                                        <div class="uk-margin">
                                            <div class="uk-inline">
                                                <span class="uk-form-icon" uk-icon="icon: pencil"></span>
                                                <input type="text" class="uk-input uk-form-width-large" id="nombre" placeholder="Nombre del participante.." name="nombre" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="ap_paterno">Apellido paterno</label>
                                    <div class="uk-form-controls">
                                        <div class="uk-margin">
                                            <div class="uk-inline">
                                                <span class="uk-form-icon" uk-icon="icon: pencil"></span>
                                                <input type="text" class="uk-input uk-form-width-large" id="ap_paterno" placeholder="Apellido paterno.." name="ap_paterno" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="ap_materno">Apellido materno</label>
                                    <div class="uk-form-controls">
                                        <div class="uk-margin">
                                            <div class="uk-inline">
                                                <span class="uk-form-icon" uk-icon="icon: pencil"></span>
                                                <input type="text" class="uk-input uk-form-width-large" id="ap_materno" placeholder="Apellido materno.." name="ap_materno" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>       
                            
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="edad">Edad</label>
                                    <div class="uk-form-controls">
                                        <div class="uk-margin">
                                            <div class="uk-inline">
                                                <span class="uk-form-icon"></span>
                                                <div class="uk-margin">
                                                        <select class="uk-select" id="edad"  name="edad">
                                                            <option value ="7"> 7 </option>
                                                            <option value ="8"> 8 </option>
                                                            <option value ="9"> 9 </option>
                                                            <option value ="10"> 10 </option>
                                                            <option value ="11"> 11 </option>
                                                            <option value ="12"> 12 </option>
                                                        </select>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="uk-margin">
                                        <label class="uk-form-label" for="sexo">Sexo</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select uk-form-width-medium" name="sexo" id="sexo">
                                            <option value="M" > Masculino </option>
                                            <option value="F" > Femenino </option>
                                        </select>
                                    </div>
                                </div>
                        
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="escuela">Escuela</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select" name="escuela" id="escuela">
                                            <?php 
                                                    include("graficas/pconexionp/abrir_conexion.php");
                                                    $registros=mysqli_query($link,"select id_escuela, nombre
                                                    from escuelas") or
                                                        die("Problemas en el select:".mysqli_error($link));

                                                        while ($reg=mysqli_fetch_array($registros))
                                                        {
                                                        echo "<option value='".$reg['nombre']."'>".$reg['nombre']."</option>";
                                                        }
                                                        include("graficas/pconexionp/cerrar_conexion.php");
                                                ?>
                                            </select>
                                        </div>
                                </div> 
                </div>
                <div class="uk-modal-footer uk-text-right">
                    <button class="uk-button uk-button-default uk-modal-close" type="button">Cancelar</button>
                    <button class="uk-button uk-button-primary" type="submit" value="Submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>

</body>
<footer id="footer">
    <a href="https://twitter.com/unipolidgo?lang=es" class="uk-icon-button uk-margin-right" uk-icon="twitter"></a>
    <a href="https://es-la.facebook.com/unipolidgo/" class="uk-icon-button  uk-margin-right" uk-icon="facebook"></a>
    <a href="https://www.youtube.com/channel/UC9Oh6bMEJ4HdaglaCfVYm0g" class="uk-icon-button" uk-icon="youtube"></a>
</footer>
</html>
