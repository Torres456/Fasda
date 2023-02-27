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
        <link rel="stylesheet" href="css/style.css?see=1.4">
        <script src="js/jquery-3.2.1.min.js"></script>
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
            a.Link_nav_sub.re_pe {
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

        <div class="divEmpleados">

            <br>
            <form id="frmEmpleados" class="frmEmpleados" autocomplete="off">

                <h2 class="subtituloEmpleado">Datos del Personal</h2>
                <hr>
                <div class="contenedorform">
                    <div class="cont_uno">
                        <div class="input_grid">
                            <div class="inpucaja">
                                <label class="lblEmpleados" for="">Nombre completo:</label>
                            </div>
                            <div class="inpucaja">
                                <input type="text" class="txtEmpleados" id="txtNombre">
                            </div>
                        </div>
                    </div>
                    <!--------------------------------------------------------------------------->
                    <div class="cont_uno">
                        <div class="conte_grid">
                            <div class="cont_caja">
                                <div class="input_grid">
                                    <div class="inpucaja">
                                        <label class="lblEmpleados" for="">Correo :</label>
                                    </div>
                                    <div class="inpucaja">
                                        <input type="text" class="txtEmpleados" id="txtCorreo">
                                    </div>
                                </div>
                            </div>
                            <div class="cont_caja">
                                <div class="input_grid">
                                    <div class="inpucaja">
                                        <label class="lblEmpleados" for="">Telefono :</label>
                                    </div>
                                    <div class="inpucaja">
                                        <input type="text" class="txtEmpleados" id="txtTel">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------------------------------------------------------------------------->
                    <div class="cont_uno">
                        <div class="conte_grid">
                            <div class="cont_caja">
                                <div class="input_grid">
                                    <div class="inpucaja">
                                        <label class="lblEmpleados" for="">Usuario : </label>
                                    </div>
                                    <div class="inpucaja">
                                        <input type="text" class="txtGasolina" id="txtUsuario">
                                    </div>
                                </div>
                            </div>
                            <div class="cont_caja">
                                <div class="input_grid">
                                    <div class="inpucaja">
                                        <label class="lblEmpleados" for="">Puesto :</label>
                                    </div>
                                    <div class="inpucaja">
                                        <select class="sltEmpleados" name="" id="txtPuesto">
                                            <option value="0">Seleccione...</option>
                                            <?php
                                            /*
                                            include("db-php/conexion.php");
                                            $query = "SELECT * FROM puestos where estatus='Activo'";
                                            $result = $conexion->query($query);

                                            if ($result->num_rows > 0) {

                                                while ($fila = $result->fetch_assoc()) {
                                                    echo "<option value=" . $fila["id"] . ">" . $fila["nombre"] . "</option>";
                                                }
                                            } else {
                                                echo "<option value='0'>Vacío</option>";
                                            }*/
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------------------------------------------------------------------------->
                    <div class="cont_uno">
                        <div class="conte_grid">
                            <div class="cont_caja">
                                <div class="input_grid">
                                    <div class="inpucaja">
                                        <label class="lblEmpleados" for="">Password :</label>
                                    </div>
                                    <div class="inpucaja">
                                        <input type="password" class="txtFactor" id="txtPassword">
                                    </div>
                                </div>
                            </div>
                            <div class="cont_caja">
                                <div class="input_grid">
                                    <div class="inpucaja">
                                        <label class="lblEmpleados" for="">Confirmar :</label>
                                    </div>
                                    <div class="inpucaja">
                                        <input type="password" class="txtFactor" id="txtConfirmar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------------------------------------------------------------------------------------>
                </div>
            </form>
            <div class="subtituloEmpleado">
                <input type="submit" class="btnLimpiar" onclick="limpiar()" value="Limpiar">
                <input type="submit" class="btnGuardar" id="btnEmpleados" value="Registrar">
            </div>
        </div>

        <iframe class="tablas" src="tablaPersonal.php" frameborder="0"></iframe>
    </body>

    </html>
    <script type="text/javascript">
        function limpiar() {

            var txt;
            var r = confirm("Deseas limpiar los datos?");
            if (r == true) {

                $('#frmEmpleados')[0].reset();

            } else {

            }

        }

        $(document).ready(function() {
            $('#btnEmpleados').click(function() {
                if ($('#txtNombre').val() == "") {
                    alert("Debes agregar el nombre");
                    return false;
                } else if ($('#txtCorreo').val() == "") {
                    alert("Debes agregar el correo");
                    return false;
                } else if ($('#txtTel').val() == "") {
                    alert("Debes agregar el telefono");
                    return false;
                } else if ($('#txtPuesto').find('option:selected').text() == "Seleccione...") {
                    alert("Debes seleccionar el puesto");
                    return false;
                } else if ($('#txtUsuario').val() == "") {
                    alert("Debes agregar un Usuario");
                    return false;
                } else if ($('#txtPassword').val() == "") {
                    alert("Debes agregar un password");
                    return false;
                }

                if ($('#txtConfirmar').val() != $('#txtPassword').val()) {
                    alert("Las contaseñas no son iguales");
                    return false;
                }


                var txt;
                var r = confirm("Deseas agregar a este empleado?");
                if (r == true) {

                    cadena = "nombre=" + $('#txtNombre').val() +
                        "&correo=" + $('#txtCorreo').val() +
                        "&telefono=" + $('#txtTel').val() +
                        "&puesto=" + $('#txtPuesto').find('option:selected').text() +
                        "&usuario=" + $('#txtUsuario').val() +
                        "&password=" + $('#txtPassword').val() +
                        "&accion=" + 1;
                    $.ajax({
                        type: "POST",
                        url: "db-php/crudPersonal.php",
                        data: cadena,
                        success: function(r) {
                            if (r == 2) {
                                alert("Este usuario ya ha sido registrado");
                            } else if (r == 1) {
                                alert("Agregado con exito");
                                location.reload();

                            } else {
                                alert("Fallo al agregar" + r);
                            }
                        }
                    });

                } else {}

            });
        });
    </script>