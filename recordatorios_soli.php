<?php
ob_start();
session_start();
include("db-php/conexion.php");
$salida = "";
$varSesion = $_SESSION["usuario"];
if ($varSesion == '' || $varSesion == null) {
    header("location:index.php");
} else {

    $user = $_SESSION['id'];
    $queryA = "SELECT * from administradores where id=$user";
    $resultA = $conexion->query($queryA);

    if ($resultA->num_rows > 0) {
        while ($filaA = $resultA->fetch_assoc()) {

            $nombre = $filaA['nombre'];
            $correo = $filaA['correo'];
            $usuario = $filaA['usuario'];
        }
    }

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css?see=1.2">
        <link rel="stylesheet" href="css/style-bandeja_de_solicitudes.css?see=1.1">
        <script src="js/jquery-3.2.1.min.js"></script>
        <title>Bandeja de solicitudes</title>
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
            a.Link_nav.ba_en {
                background: white !important;
                color: #2e2e2e !important;
            }

            a.Link_nav_sub.recor_so {
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
                <div class="contenedor_cont_dos">
                    <div class="con_texttitulo">
                        <h2 class="titulo_bandeja">Recordatorios</h2>
                    </div>
                    <hr>
                    <div class="con_texttitulo">
                        <h2 class="titulo_bandeja2">Solicitudes enviadas por los usuarios</h2>
                    </div>
                    <div class="contendor">
                        <div class="contenedor_conte">
                            <div class="contenedor_grid">
                                <?php #COLOCA TU CODIGO PHP AQUI 
                                ?>
                                <div class="contendor_hijo">
                                    <p>para crear un contenedor con scroll vertical a partir de una div solo tenemos que usar unas pocas lineas de css, también necesitamos un par de de div para que se adapten al contenido, no olvidemos que para que aparezca el scroll la capa contenedora a de tener un alto fijo</p>
                                </div>
                                <div class="contendor_hijo_dele">
                                    <div class="buttondel">
                                        <div class="butondelte">
                                            <a href="" onclick="revisar('codigo php');" id="deletebutton" title="Borrar mensaje">🗑</a>
                                        </div>
                                    </div>
                                </div>
                                <?php #COLOCA TU CODIGO PHP AQUI 
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <script type="text/javascript" src="js/bandeja_entra.js"></script>
        <script type="text/javascript" src="js/check.js"></script>
    </body>

    </html>