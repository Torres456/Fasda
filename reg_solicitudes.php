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
        <link rel="stylesheet" href="css/style-bandeja_de_solicitudes.css?see=1.0">
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
            a.Link_nav_sub.re_sol {
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
                <div class="contenedor_cont">
                    <div class="con_texttitulo">
                        <h2 class="titulo_bandeja">Registro de solicitudes</h2>
                    </div>
                    <hr>
                    <div class="contenedor_form">
                        <form action="" class="formulario_solicitud" id="form_soli">
                            <div class="con_form_conta">
                                <div class="conta_hijo">
                                    <label for="asunto">Asunto de la solicitud: </label>
                                    <input type="text" name="asunto" id="txtasunto">
                                </div>
                                <div class="conta_hijo">
                                    <label for="nombre">Nombre completo: </label>
                                </div>
                                <div class="conta_hijo">
                                    <select name="nombre" id="txtnombre">
                                        <option value="0">Seleccione...</option>
                                        <option value="Director General Fasda tec.">Director General Fasda tec.</option>
                                        <option value="Director De Producción Fasda tec.">Director De Producción Fasda tec.</option>
                                        <option value="Diseñador y Productor">Diseñador y Productor</option>
                                        <option value="Desarrollador">Desarrollador</option>
                                        <option value="Administrador">Administrador</option>
                                    </select>
                                </div>
                                <div class="conta_hijo">
                                    <label for="usuario">Usuario del personal: </label>
                                    <input type="text" name="usuario" id="txtusuario">
                                </div>
                                <div class="conta_hijo">
                                    <label for="mensaje">Mensaje de la solicitud: </label>
                                    <textarea name="mensaje" cols="30" rows="10" id="txtmensaje"></textarea>
                                </div>
                                <div class="conta_hijo_ssub">
                                    <input type="submit" value="Enviar solicitud" id="SubMasse">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript" src="js/bandeja_entra.js"></script>
        <script type="text/javascript" src="js/check.js"></script>
    </body>

    </html>