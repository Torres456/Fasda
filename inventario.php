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

            a.Link_nav_sub.inve_pro {
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
            <div class="contenedor_global2">
                <div class="contenedor_madre">
                    <div class="conte_caja_hijo">
                        <h2 class="texto_titulo">Inventario</h2>
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
                                    <th>Producto</th>
                                    <th>Características</th>
                                    <th>Descripción</th>
                                    <th>Usuario asignado</th>
                                    <th class="no_border_right">Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                #codigo PHP SQL
                                ?>
                                <tr>
                                    <td>Laptop Acer A11</td>
                                    <td>Intel 9! RAM 16GB SDD </td>
                                    <td>Laptop de la marca acer, colo azul con negro</td>
                                    <td>Karla</td>
                                    <td class="ne_bor">Lunes 06 de Febrero de 2023</td>
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
        <script type="text/javascript" src="js/clock.js?see=1.4"></script>
        <script type="text/javascript" src="js/bsasistenciaentrada.js"></script>
        <script type="text/javascript" src="js/bsasistenciasalida.js"></script>

    </body>

    </html>