<?php
ob_start();
session_start();
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
        <link rel="stylesheet" type="text/css" href="css/style-registros-documentos.css?ver=1.3">
        <link rel="stylesheet" href="css/style.css?see=1.2">
        <script src="js/jquery-3.2.1.min.js"></script>
        <title>Registros de documentos</title>
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
            a.Link_nav.res_glo {
                background: white !important;
                color: #2e2e2e !important;
            }
            a.Link_nav_sub.re_fi {
                background-color: white !important;
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
        </head>

        <body>
            <div class="contenedorregistros">
                <div class="containeelemetes">
                    <div class="containertitle">
                        <div class="contedorformus">
                            <form action="" method="dialog" class="formularioregistros" enctype="multipart/form-data" id="FormFicha">
                                <div class="context">
                                    <h2 class="titleregistros">Registros de fichas.</h2>
                                </div>
                                <hr>
                                <div class="inputsgrid">
                                    <div class="cajainputs">
                                        <div class="cajalabelhijo">
                                            <label for="nombre">Nombre completo:</label>
                                        </div>
                                        <div class="cajahijoinput">
                                            <select name="nombre" id="selectoptionfichanombre">
                                                <option value="0">Seleccione...</option>
                                                <option value="Humberto Salvador Velazquez Romero">Humberto Salvador Velazquez Romero</option>
                                                <option value="Maciel Pulido Garcia">Maciel Pulido Garcia</option>
                                                <option value="Diana Laura Rangel Hernandez">Diana Laura Rangel Hernandez</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="cajainputs">
                                        <div class="cajalabelhijo">
                                            <label for="puesto">Puesto que ocupa:</label>
                                        </div>
                                        <div class="cajahijoinput">
                                            <select name="puesto" id="selectoptionficha">
                                                <option value="0">Seleccione...</option>
                                                <option value="Director General Fasda tec.">Director General Fasda tec.</option>
                                                <option value="Director De Producción Fasda tec.">Director De Producción Fasda tec.</option>
                                                <option value="Diseñador y Productor">Diseñador y Productor</option>
                                                <option value="Desarrollador">Desarrollador</option>
                                                <option value="Administrador">Administrador</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="inputsgrid2">
                                    <div class="cajainputs">
                                        <div class="cajahijoinput">
                                        <label for="archivos">Añadir ficha: </label>
                                            <input type="file" name="archivo" id="filearchivo">
                                        </div>
                                    </div>
                                </div>
                                <div class="inputsgrid3">
                                    <div class="cajainputs">
                                        <div class="cajahijoinput">
                                            <input type="submit" id="SubmitFormficha" value="Enviar solicitud">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                    <script type="text/javascript" src="js/popup.js?see=1.2"></script>
                    <script type="text/javascript" src="js/dbaseficha.js?see=1.0"></script>
        </body>

    </html>