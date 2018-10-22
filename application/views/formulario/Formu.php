<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="http://localhost/proyecto_SENA/assets/css/Formu.css">
	<link rel="stylesheet" href="http://localhost/proyecto_SENA/assets/css/bootstrap.css">
	<script src="http://localhost/proyecto_SENA/application/controllers/validar.js"></script>
	<title>Formulario</title>
</head>
<body>
	<div class="container-fluid bg-info">
		<div class="Formulario">
			<form action="Cont_form/subir_datos" method="POST" onsubmit="validar()">
				<div class="Titulo">
					AGREGAR REGISTRO
				</div>
				<input class="Nod" type="number" name="nodocu" placeholder="Documento">
				<input class="Nomb" type="text" name="nombres" placeholder="Nombres">
				<input class="Ape" type="text" name="apellidos" placeholder="Apellidos">
				<input class="Correo" type="email" name="correo" placeholder="Correo electronico">
				<select class="Selector" name="rol">
					<option value="" selected="true" disabled="true">Rol</option>
					<option>Ingeniero</option>
					<option>Contador</option>
					<option>Recepcionista</option>
				</select>
				<input class="Envio btn bg-info text-light" type="submit" name="agregar" ">
			</form>
		</div>
	</div>
	<script src="http://localhost/proyecto_SENA/assets/js/jquery-3.3.1.slim.min.js"></script>
	<script src="http://localhost/proyecto_SENA/assets/js/popper.min.js"></script>
	<script src="http://localhost/proyecto_SENA/assets/js/bootstrap.min.js"> </script>
</body>
</html>