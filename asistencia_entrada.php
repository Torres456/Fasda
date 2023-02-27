<?php
ob_start();
session_start();
include("db-php/conexion.php");
$salida = "";
$varSesion = $_SESSION["usuario"];
if ($varSesion == '' || $varSesion == null) {
    header("location:index.php");
} else {


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css?see=1.2">
        <link rel="stylesheet" href="css/style-asistencia.css?see=1.4">
        <script src="js/jquery-3.2.1.min.js"></script>
        <title>Asistencia Resgistro de Entrada</title>
        <script>
            function nobackbutton() {
                window.location.hash = "no-back-button";
                window.location.hash = "Again-No-back-button"
                window.onhashchange = function() {
                    window.location.hash = "";
                }
            }
        </script>
        <style>
             a.Link_nav.asis {
                background: white !important;
                color: #2e2e2e !important;
            }
            a.Link_nav_sub.as_en {
                background: white !important;
                color: #2e2e2e !important;
            }
        </style>
        <title>Document</title>
    </head>

    <body onload="nobackbutton();">


        <div class="cabecera">

        <?php
        include("db-php/cabecera_principal.php");
    }
        ?>
        </div>
        <section>
            <div class="con_re_asis">
                <div class="con_re_block">
                    <div class="con_titulo_text">
                        <h2 class="titulotext">Registro de entrada</h2>
                    </div>
                    <hr>
                    <div class="con_re_asi_form">
                        <form action="" class="formulari_asiste" id="formasisd">
                            <div class="con_form">
                                <div class="con_form_caja_grid">
                                    <div class="con_form_caja_hijo">
                                        <label for="nombre">Usuario:</label>
                                    </div>
                                    <div class="con_form_caja_hijo">
                                        <select name="nombre" id="selectoption">
                                            <option value="0">Seleccione...</option>
                                            <option value="Director General Fasda tec.">Director General Fasda tec.</option>
                                            <option value="Director De Producción Fasda tec.">Director De Producción Fasda tec.</option>
                                            <option value="Diseñador y Productor">Diseñador y Productor</option>
                                            <option value="Desarrollador">Desarrollador</option>
                                            <option value="Administrador">Administrador</option>
                                        </select>
                                    </div>
                                    <div class="con_form_caja_hijo">
                                        <label for="puesto">Puesto:</label>
                                    </div>
                                    <div class="con_form_caja_hijo">
                                        <select name="puesto" id="selectoption">
                                            <option value="0">Seleccione...</option>
                                            <option value="Director General Fasda tec.">Director General Fasda tec.</option>
                                            <option value="Director De Producción Fasda tec.">Director De Producción Fasda tec.</option>
                                            <option value="Diseñador y Productor">Diseñador y Productor</option>
                                            <option value="Desarrollador">Desarrollador</option>
                                            <option value="Administrador">Administrador</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="con_form_caja_hora_fecha">
                                    <div class="con_form_caja_hijo_hore_fecha_grid">
                                        <div class="con_form_caja_hijo_hijo_hora_fecha">
                                            <div class="confle">
                                                <label for="fecha" class="fechas">Fecha</label>
                                            </div>
                                            <div class="confle">
                                                <input type="text" name="fecha" id="textfecha">
                                            </div>
                                        </div>
                                        <div class="con_form_caja_hijo_hijo_hora_fecha">
                                            <div class="confle">
                                                <label for="fecha" class="fechas">Hora de entrada</label>
                                            </div>
                                            <div class="confle">
                                                <input type="text" name="hora_entrada" id="textentrada">
                                            </div>                               
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="con_form_caja_submit">
                                    <div class="con_form_caja_submit_hijo">
                                        <input type="submit" value="Registrar" id="Submitenvia" class="inputenviar">
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript" src="js/clock.js?see=1.4"></script>
        <script type="text/javascript" src="js/bsasistenciaentrada.js"></script>
        <script type="text/javascript" src="js/bsasistenciasalida.js"></script>

    </body>

    </html>