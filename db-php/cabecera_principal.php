<?php
$usuario = $_SESSION['usuario'];
date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_MX.UTF-8');
$fecha = strftime("%d-%m-%Y");
$hora = strftime("%H:%M:%S");

?>

<header>
    <nav>
        <input type="checkbox" name="" id="chekcs" class="chec">
        <label for="chekcs" class="menubtnd">☰</label>
        <a href="principal.php" class="Lnk_logo">
            <img src="recursos/L_F.png" alt="LOGO_FASDATEC" class="_logo_fas">
        </a>
        <ul class="ul_nav">
            <li class="li_nav">
                <a href="#" class="Link_nav asis">Asistencia 🠟</a>
                <ul class="ul_nav_sub">
                    <li class="li_nav_sub"><a href="asistencia_entrada.php" class="Link_nav_sub as_en">Registro entrada</a></li>
                    <li class="li_nav_sub"><a href="asistencia_salida.php" class="Link_nav_sub as_sal">Registro salida</a></li>
                    <li class="li_nav_sub"><a href="registro_de_asistencias.php" class="Link_nav_sub re_asis">Registros de asistencia</a></li>
                    <li class="li_nav_sub"><a href="acceso_personal.php" class="Link_nav_sub">Reporte Asistencia</a></li>
                </ul>
            </li>
            <li class="li_nav"><a href="acceso_personal.php" class="Link_nav">Acceso Personal</a></li>
            <li class="li_nav">
                <a href="#" class="Link_nav res_glo">Registros 🠟</a>
                <ul class="ul_nav_sub">
                    <li class="li_nav_sub"><a href="registro_personal.php" class="Link_nav_sub re_pe">Registro Personal</a></li>
                    <li class="li_nav_sub"><a href="registro_documentos_analisi.php" class="Link_nav_sub re_an">Registro de análisis</a></li>
                    <li class="li_nav_sub"><a href="registro_documentos_expe.php" class="Link_nav_sub re_ex">Registro de expedientes</a></li>
                    <li class="li_nav_sub"><a href="registro_documentos_ficha.php" class="Link_nav_sub re_fi">Registro de fichas</a></li>

                </ul>
            </li>
            <li class="li_nav">
                <a href="#" class="Link_nav re_equi">Resguardo Equipo 🠟</a>
                <ul class="ul_nav_sub">
                    <li class="li_nav_sub"><a href="agregar_producto.php" class="Link_nav_sub agre_pro">Agregar producto</a></li>
                    <li class="li_nav_sub"><a href="inventario.php" class="Link_nav_sub inve_pro">Inventario</a></li>
                </ul>
            </li>
            <li class="li_nav">
                <a href="#" class="Link_nav ba_en">Bandeja de solicitudes 🠟</a>
                <ul class="ul_nav_sub">
                    <li class="li_nav_sub"><a href="reg_solicitudes.php" class="Link_nav_sub re_sol">Registro de solicitudes</a></li>
                    <li class="li_nav_sub"><a href="recordatorios_soli.php" class="Link_nav_sub recor_so">Recordatorios</a></li>
                </ul>
            </li>
            <li class="li_nav"><a href="db-php/cerrar.php" class="Link_nav close">Salir</a></li>

        </ul>
    </nav>
</header>