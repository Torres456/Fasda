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
        <link rel="stylesheet" href="css/style-asistencia.css?see=1.3">
        <script src="js/jquery-3.2.1.min.js"></script>
        <title>Asistencia Resgistro de Salida</title>
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
            a.Link_nav_sub.as_sal {
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
                        <h2 class="titulotext">Registro de salida</h2>
                    </div>
                    <hr>
                    <div class="con_re_asi_form">
                        <form action="" class="formulari_asiste" id="formasisd">
                            <div class="con_form">
                                <div class="con_form_caja_grid">
                                    <div class="con_form_caja_hijo">
                                        <label for="id_asistencia">ID de asistencia:</label>
                                    </div>
                                    <div class="con_form_caja_hijo">
                                        <input type="text" name="id_asistencia" id="idasistenc">
                                    </div>
                                </div>
                                <div class="con_form_caja_hora_fecha">
                                    <div class="con_form_caja_hijo_hijo_hora_fecha_">
                                        <div class="confle">
                                            <label for="fecha" class="sali">Hora de salida</label>
                                        </div>
                                        <div class="confle">
                                            <input type="text" name="hora_salida" id="textsalida">
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
        <script type="text/javascript" src="js/clock2.js?see=1.0"></script>
        <script type="text/javascript" src="js/bsasistenciaentrada.js"></script>
        <script type="text/javascript" src="js/bsasistenciasalida.js"></script>

    </body>

    </html>