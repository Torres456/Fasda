<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css?see=1.1">
	<link rel="stylesheet" href="css/nuevostyle.css?see=1.0">
	<script src="js/jquery-3.2.1.min.js"></script>
	<title>Document</title>
</head>

<body class="body_login">

	<div class="contenedortodo">
		<div class="grid_colum_2">
			<div class="containerlogin">
				<img src="recursos/L_F.png" alt="Logo_FASDATEC" class="log_fasda">
			</div>
			<div class="containerlogin">
				<div class="divLogin">

					<h2 class="titulo2">INICIO DE SESIÓN</h2>

					<form id="frmLogin">
						<label for="txtUsuario" class="lblLogin">Usuario:</label>
						<input type="text" class="txtLogin" id="txtUsuario" autocomplete="off">
						<label for="txtPassword" class="lblLogin">Password:</label>
						<div class="pass">
							<input type="password" class="txtLogin" id="txtPassword">
							<button class="btnEye" type="button" onclick="mostrarContrasena()" title="Ver contraseña"> <span class="eye">&#128065;</span></button>
						</div>
					</form>

					<input type="submit" id="btnEntrar" class="btnLogin" value="Entrar">

				</div>
			</div>
		</div>
	</div>


</body>

</html>
<script type="text/javascript">
	 function mostrarContrasena() {
        var tipo = document.getElementById("txtPassword");
        if (tipo.type == "password") {
            tipo.type = "text";
        } else {
            tipo.type = "password";
        }
    }
	$(document).ready(function() {
		$('#btnEntrar').click(function() {
			if ($('#txtUsuario').val() == "") {
				alert("Debes agregar el usuario");
				return false;
			} else if ($('#txtPassword').val() == "") {
				alert("Debes agregar la contraseña");
				return false;
			}

			cadena = "usuario=" + $('#txtUsuario').val() +
				"&password=" + $('#txtPassword').val();

			$.ajax({
				type: "POST",
				url: "db-php/acceso.php",
				data: cadena,
				success: function(data) {
					console.log(data);
					if (data == 1) {
						$(location).attr('href', 'principal.php');
					} else if (data == 2) {
						alert("Usuario o Contraseña Incorrectos!");
						$('#frmLogin')[0].reset();
					} else {
						alert("Fallo al entrar :( " + data);
						$('#frmLogin')[0].reset();
					}
				}
			});
		});
	});
</script>