<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['mail']) >= 1 && strlen($_POST['clave']) >= 1) {
	    $nombre = trim($_POST['nombre']);
	    $apellido = trim($_POST['apellido']);
		$direccion = trim($_POST['direccion']);
		$telefono = trim($_POST['telefono']);
		$mail = trim($_POST['mail']);
		$clave = trim($_POST['clave']);
		$register = trim($_POST['register']);
	    $fecha_reg = date("d/m/y");
	    $consulta = "INSERT INTO clientes(nombre, apellido, direccion, telefono, mail, clave, fecha_reg) VALUES ('$nombre','$apellido','$direccion','$telefono','$mail','$clave','$fecha_reg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>

			<?php header('Location: ../Logica/login.php');
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>