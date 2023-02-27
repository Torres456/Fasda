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
        <link rel="stylesheet" href="css/style-asistencia.css?see=1.0">
        <script src="js/jquery-3.2.1.min.js"></script>
        <title>Asistencia Resgistros</title>
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
            a.Link_nav_sub.re_asis {
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
            <div class="con_re_asis_regis">
                <div class="con_re_block">
                    <div class="con_titulo_text">
                        <h2 class="titulotext">Registros de asistencia</h2>
                    </div>
                    <div class="bucador">
                        <form action="#" method="GET">
                            <ul class="ul_buscar">
                                <li class="li_buscar labe"><label for="buscar">Buscar: </label></li>
                                <li class="li_buscar ser"><input type="search" name="buscar_re" id="buscar_re"></li>
                                <li class="li_buscar sub"><input type="submit" value="Buscar" class="dubm"></li>

                            </ul>
                        </form>
                    </div>
                    <div class="con_tabla_regi_asis">
                        <table class="table_asis">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Puesto</th>
                                    <th>Fecha</th>
                                    <th>Hora de entrada</th>
                                    <th class="no_border_right">Hora de salida</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                #codigo PHP SQL
                                ?>
                                        <tr>
                                            <td>210</td>
                                            <td>Bryan Pintado Monroy</td>
                                            <td>Desarrollador</td>
                                            <td>Lunes 6 de Febrero de 2023</td>
                                            <td>01:05:53</td>
                                            <td class="ne_bor">/</td>
                                        </tr>

                                    <?php
                               #codigo PHP-SQL
                                    ?>
                                    <div class="no_hay_registros">
                                        <h4></h4>
                                    </div>
                                <?php  ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript" src="js/bsasistenciaentrada.js"></script>
        <script type="text/javascript" src="js/bsasistenciasalida.js"></script>

    </body>

    </html>