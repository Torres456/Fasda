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
        <link rel="stylesheet" href="css/style-resdguardo_equipo.css?see=1.0">
        <script src="js/jquery-3.2.1.min.js"></script>
        <title>Agregar producto</title>
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
            a.Link_nav.re_equi {
                background: white !important;
                color: #2e2e2e !important;
            }

            a.Link_nav_sub.agre_pro {
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
            <div class="contenedor_global">
                <div class="contenedor_madre">
                    <div class="conte_caja_hijo">
                        <h2 class="texto_titulo">Agregar producto</h2>
                    </div>
                    <hr>
                    <div class="conte_caja_hijo_dos">
                        <form action="#" method="POST" class="form_agre_pro">
                            <div class="conte_form_madre">
                                <div class="conte_form_hijo_grid">
                                    <div class="conte_form_hijo_subhijo">
                                        <label for="nombre_pro">Nombre producto:</label>
                                    </div>
                                    <div class="conte_form_hijo_subhijo">
                                        <input type="text" name="nombre_pro" id="txtNombrePro">
                                    </div>
                                    <div class="conte_form_hijo_subhijo">
                                        <label for="caracter">Características:</label>
                                    </div>
                                    <div class="conte_form_hijo_subhijo">
                                        <input type="text" name="caracter" id="txtcaracter">
                                    </div>
                                    <div class="conte_form_hijo_subhijo">
                                        <label for="decrip">Descripción:</label>
                                    </div>
                                    <div class="conte_form_hijo_subhijo">
                                        <input type="text" name="descrip" id="txtDescrip">
                                    </div>
                                    <div class="conte_form_hijo_subhijo">
                                        <label for="Usu_Asig">Usuario asignado:</label>
                                    </div>
                                    <div class="conte_form_hijo_subhijo">
                                        <input type="text" name="Usu_Asig" id="txtusuarioasig">
                                    </div>
                                </div>
                                <div class="conte_form_madre2">
                                    <div class="conte_form_hijo_grid2">
                                        <div class="conte_form_hijo_grid_subhijo">
                                            <label for="docu_asig">Documento asignación:</label>
                                        </div>
                                        <div class="conte_form_hijo_grid_subhijo">
                                            <input type="file" name="docu_asig" id="filedocumento">
                                        </div>
                                        <div class="conte_form_hijo_grid_subhijo">
                                            <input type="button" value="LIMPIAR" id="button_clean">
                                        </div>
                                        <div class="conte_form_hijo_grid_subhijo">
                                            <input type="button" value="AÑADIR" id="button_add">
                                        </div>
                                    </div>
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